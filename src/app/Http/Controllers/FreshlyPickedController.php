<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Season;
use App\Models\Product_Season;

use Illuminate\Http\Request;

class FreshlyPickedController extends Controller
{
    public function index(){
                return  view('products');
    }
    public function create()
    {
        return view('register');
    }
    public function edit(Request $request){
        $product = Product::find($request->id);
        return view('details');
    }
}
