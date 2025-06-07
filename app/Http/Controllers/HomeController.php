<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    // home routes
    public function mac(){
        return view('user.mac');
    }
      public function watch(){
        $products = Products::all();
        return view('user.watch',compact('products'));
    }
      public function airpods(){
        return view('user.airpods');
    }
      public function ipad(){
        return view('user.ipad');
    }

    public function cart($id){
      $product_id = $id;
      $user = Auth::user();
      $user_id = $user->id;

      $data = new Cart();
      $data->user_id = $user_id;
      $data->product_id = $id;
      $data->save();
      return redirect()->back()->with('message', 'Product added to cart successfully!');


    }

    public function mycart(){

      if(Auth::id()){
        $user = Auth::user();
        $user_id = $user->id;
        $cart = Cart::where('user_id',$user_id)->get();
      }
      return view('user.cart',compact('cart'));   
     }
    
}
