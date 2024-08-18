<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index(){
        $products=Products::get();        
        return view('index',['productsdata'=>$products]);
    }

    public function show($id){
        $product=Products::where('id',$id)->first();
        return view('show',['productdata'=>$product]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        // validator
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg,jfif|max:10000',
        ]);

        // insert query
       $imageName = time().'.'.$request->image->extension();
       $request->image->move(public_path('products'),$imageName);

       $product = new Products;
       $product->name = $request->name;
       $product->description = $request->description;
       $product->image = $imageName;

       $product->save();

       return back()->withSuccess('Product added successfully !!!');
       
    }



    public function edit($id){
        $product = Products::where('id',$id)->first();
        return view('edit',['product'=>$product]);
    }


    public function update(Request $request,$id){

        // validator
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'nullable|mimes:png,jpg,jpeg,jfif|max:10000',
        ]);

        // update query

        //For a specific product
        $product = Products::where('id',$id)->first();

        if(isset($request->image)){

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'),$imageName);
            $product->image = $imageName;

        }

       $product->name = $request->name;
       $product->description = $request->description;

       $product->save();

       return back()->withSuccess('Product updated successfully !!!');

       
    }


    public function delete($id){
        $product = Products::where('id',$id)->first();
        $product->delete();

        return back()->withSuccess('Product Deleted !');

    }
}
