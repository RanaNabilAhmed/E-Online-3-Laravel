<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;


class ProductController extends Controller
{
    public function index(){

        $products=Product::all()->where('status',1);
        return view('backend/module/product/AllProduct', compact('products'));
    }
    public function create(){

        $cat=Category::all();
        return view('backend/module/product/AddProduct', compact('cat'));
    }
    public function store(Request $request){

        // $p=new Product();
        // $p->title=$request->title;
        // $p->description=$request->description;
        // $p->price=$request->price;
        // $p->discount=$request->discount;
        // $p->status= 1;
        // $file = $request->file('image');
        // $image = $file->getClientOriginalName();
        // $destination = public_path('/images/');
        // $file->move($destination, $image);
        // $p->product_image = $image;
        // $p->save();
        // Session::flash('message','Product Save Successfully');
        // return redirect()->back();
    }
}
