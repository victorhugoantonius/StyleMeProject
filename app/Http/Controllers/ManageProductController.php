<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ManageProductController extends Controller
{
    public function search_to_manage(Request $request)
    {
        $searched_name = $request->searchmanage;
        $searched_products = Product::where('name','like',"%$searched_name%")->paginate(10);

        return view('manageSearch',compact('searched_products'),[
            'title' => 'searched products'
        ]);
    }

    public function index()
    {
        return view('manageIndex',[
        "title" => "Manage Products",
        "products" => Product::paginate(10)->withQueryString()
        ]);
    }

    public function add_form(){
        return view('add',[
            'title' => 'Add Product',
            'categories' => Category::all()
        ]);
    }

    public function add_product(Request $request){
        
        $validated_data = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'full_description' => 'required',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        
        $validated_data['short_description'] = Str::limit($request->full_description, 100);
        $validated_data['image'] = $request->file('image')->store('product-images');
         
        Product::create($validated_data);

        return redirect('/manageproduct')->with('success','New Product has been added.');
    }

    public function delete_product($id){

        $delete_product = Product::find($id);

       $delete_product->delete();

       return redirect('/manageproduct')->with('success',' Product has been deleted.');
    }

    public function show_edit($id){
        $edit_product = Product::find($id);

        return view('edit', compact('edit_product'),[
            'title' => 'Edit Product',
            'categories' => Category::all()
        ]);
    }

    public function edit_product(Request $request,  $id){
        $validated_data = $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'full_description' => 'required',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $validated_data['short_description'] = Str::limit($request->full_description,100);
        $validated_data['image'] = $request->file('image')->store('product-images');
    
       $edited_data = Product::find($id);       
       $edited_data->update($validated_data);       
       
       return redirect('/manageproduct')->with('success','Product has been updated.');
    }
}

