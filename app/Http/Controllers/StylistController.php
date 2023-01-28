<?php

namespace App\Http\Controllers;

use App\Models\Stylist;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\BookingDetail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class StylistController extends Controller
{
    public function index(){

        $stylists = Stylist::all();
        return view('stylists', compact('stylists'),[
            'title' => 'Stylist',
        ]);
    }

    public function stylistDetail(Stylist $stylist){
        return view('stylist',[
            "title" => "Stylist",
            "stylist" => $stylist
        ]);
    }

    public function addToCart(Stylist $stylist, Request $request){

        $validated = $request->validate([
            'bookingdate' => 'after:today'
        ]);


        $booking = new Booking();


        $bk_check = Booking::where('user_id', Auth::user()->id)
        ->where('checkout_status','no')->first();

        if (empty($bk_check)) {
            $booking->user_id = Auth::user()->id;
            $booking->booking_date = $validated['bookingdate'];
            $booking->total_price = 0;
            $booking->checkout_status = 'no';
            $booking->save();
        }

        // $same_item_check = TransactionDetail::where('product_id', $product->id)
        // ->where('transaction_id', Transaction::where('user_id', Auth::user()->id)
        // ->where('checkout_status','no')->first()->id )->first();

       
            $booking_detail = new BookingDetail();
            $booking_detail->stylist_id = $stylist->id;
            $booking_detail->booking_id = Booking::where('user_id', Auth::user()->id)
            ->where('checkout_status','no')->first()->id;
            $booking_detail->time = $request->time;
            $booking_detail->sub_total = $stylist->rate;
            $booking_detail->save();
       

        $booking = Booking::where('user_id', Auth::user()->id)
        ->where('checkout_status','no')->first();

        $booking->total_price += $stylist->rate;
        $booking->update();

       return redirect('/')->with('success', 'Booking has been added to your cart');
    }

    public function showCart(){
        
        // $date = Carbon::now();
        $booking = Booking::where('user_id', Auth::user()->id)
        ->where('checkout_status','no')->first();
        
        if(!empty($booking)){
            $booking_details = bookingDetail::where('booking_id', $booking->id)->get();
            return view('stylistcart',compact('booking', 'booking_details'),[
                'title' => 'StylistCart',
            ]);
        }else{
            return view('stylistcart',[
                'title' => 'StylistCart'
            ]);
        }
        
    }

    public function deleteCartItem($id){

        $detail_to_delete = BookingDetail::where('id', $id)->first();

        $booking_to_update = Booking::where('id', $detail_to_delete->booking_id)->first();
        $booking_to_update->total_price -= $detail_to_delete->sub_total;
        $booking_to_update->update();
        $detail_to_delete->delete();

        return redirect('/stylistcart')->with('success', 'Booking has been deleted');
    }

    public function checkout(){
        $booking = Booking::where('user_id', Auth::user()->id)
        ->where('checkout_status','no')->first();
        $booking->checkout_status = 'yes';
        $booking->update();

        return redirect('/')->with('success', 'Checkout Success, see history menu to view your booking details');
    }
}
