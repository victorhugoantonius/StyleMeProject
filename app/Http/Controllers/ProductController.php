<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

use function PHPUnit\Framework\isEmpty;

class ProductController extends Controller

{
    public function index(){
        
      $title = '';
      if (request('category')) {
        $category = Category::firstWhere('slug', request('category'));
        $title = ' in ' . $category->name;
      }
        return view('products',[
            "title" => "All Products" . $title,
            "products" => Product::latest()->filter(request(['search','category']))->paginate(3)->withQueryString()
        ]);
    }
    public function showCategory(){
        return view('categories',[
            'title' => 'Product Categories',
            'categories' => Category::all()
        ]);
    }

    public function productDetail(Product $product){
        return view('product',[
            "title" => "Product",
            "product" => $product
        ]);
    }

    public function addToCart(Product $product, Request $request){

        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);


        
        $transaction = new Transaction();
        $date = Carbon::now();

        $tr_check = Transaction::where('user_id', Auth::user()->id)
        ->where('checkout_status','no')->first();

        if (empty($tr_check)) {
            $transaction->user_id = Auth::user()->id;
            $transaction->transaction_date = $date;
            $transaction->total_price = 0;
            $transaction->checkout_status = 'no';
            $transaction->save();
        }

        $same_item_check = TransactionDetail::where('product_id', $product->id)
        ->where('transaction_id', Transaction::where('user_id', Auth::user()->id)
        ->where('checkout_status','no')->first()->id )->first();

        if(empty($same_item_check))
        {
            $transaction_detail = new TransactionDetail();
            $transaction_detail->product_id = $product->id;
            $transaction_detail->transaction_id = Transaction::where('user_id', Auth::user()->id)
            ->where('checkout_status','no')->first()->id;
            $transaction_detail->quantity = $validated['quantity'];
            $transaction_detail->sub_total = $validated['quantity'] * $product->price;
            $transaction_detail->save();
        }else{
            $transaction_detail =   $same_item_check;
            $transaction_detail->quantity += $validated['quantity'];
            $transaction_detail->sub_total += $validated['quantity'] * $product->price;
            $transaction_detail->update();
        }

        $transaction = Transaction::where('user_id', Auth::user()->id)
        ->where('checkout_status','no')->first();

        $transaction->total_price += $validated['quantity'] * $product->price;
        $transaction->update();

       return redirect('/')->with('success', 'Product has been added to your cart');
    }

    public function showCart(){
        
        $transaction = Transaction::where('user_id', Auth::user()->id)
        ->where('checkout_status','no')->first();
        
        if(!empty($transaction)){
            $transaction_details = TransactionDetail::where('transaction_id', $transaction->id)->get();
            return view('cart',compact('transaction', 'transaction_details'),[
                'title' => 'Cart',
            ]);
        }else{
            return view('cart',[
                'title' => 'Cart'
            ]);
        }
        
   
    }

    public function deleteCartItem($id){

        $detail_to_delete = TransactionDetail::where('id', $id)->first();

        $transaction_to_update = Transaction::where('id', $detail_to_delete->transaction_id)->first();
        $transaction_to_update->total_price -= $detail_to_delete->sub_total;
        $transaction_to_update->update();

        $detail_to_delete->delete();

        return redirect('/cart')->with('success', 'Product has been deleted');
    }

    public function checkout(){
        $transaction = Transaction::where('user_id', Auth::user()->id)
        ->where('checkout_status','no')->first();
        $transaction->checkout_status = 'yes';

        $transaction->update();

        return redirect('/')->with('success', 'Checkout Success, see history menu to view your transaction details');
    }
}
