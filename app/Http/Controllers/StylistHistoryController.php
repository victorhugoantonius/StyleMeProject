<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StylistHistoryController extends Controller
{
    public function index(){
        $bookings = Booking::where('user_id', Auth::user()->id)->where('checkout_status','yes')->get();

        return view('stylistHistory',compact('bookings'),[
            'title' => 'StylistHistory',
        ]);
    }

    public function detail($id){

        $booking = Booking::where('id', $id)->first();
        $booking_details = BookingDetail::where('booking_id', $booking->id)->get();

        return view('stylistHistoryDetail',compact('booking','booking_details'),[
            'title' => 'StylistHistoryDetail'
        ]);
    }
}
