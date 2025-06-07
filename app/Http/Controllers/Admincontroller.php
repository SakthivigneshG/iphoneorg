<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products; 

class Admincontroller extends Controller
{  

    public function index(){
        $products = Products::all();
        return view('admin.index',compact('products'));
    }
    public function createMac()
    { 
       
        return view('admin.create',);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'intelligence' => 'required',

            'chip' => 'required',

            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,avif,|max:2025',
            'camera' => 'required',
        ]);

        // image upload
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images_products'), $imageName);


        $product = new Products();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $imageName;
        $product->intelligence = $request->intelligence;
        $product->chip = $request->chip;
        $product->camera = $request->camera;
        $product->save();
        return redirect('admin/dashboard');

    }
}
