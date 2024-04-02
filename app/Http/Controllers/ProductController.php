<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function index()
    {
        return view('products.index');
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        

          $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('products'), $imageName);
        dd($imageName);
        $product =new Product;
        $product->name = $request->name;
        $product->description = $request->desp;
        $product->price = $request->price;
        $product->image = $imageName;
        $product->save();
        return redirect()->route('products.index');
    }
}
