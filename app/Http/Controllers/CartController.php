<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Syscover\ShoppingCart\Facades\CartProvider;
use Syscover\ShoppingCart\Item;

class cartcontroller extends Controller
{
    public function index()
    {
        // CartProvider::instance()->add(new Item('293ad', 'Product 1', 1, 9.99));
        // foreach(CartProvider::instance()->getCartItems() as $item)
        // {
        //   print_r($item);
        // }
        // return view('welcome');
        return view('/index');
    }
    public function showcart()
    {   
        foreach(CartProvider::instance()->getCartItems() as $item)
         {
          print_r($item);
         }
        // echo 'hello';
         die;
        return view('come');
    }
}
