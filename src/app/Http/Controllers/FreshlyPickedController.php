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


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'seasons' => 'required|array',
            'seasons.*' => 'string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $data = $request->only(['name', 'price', 'description', 'seasons']);

        // 画像がアップロードされた場合
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $product->update($data);

        return redirect()->route('products');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        // 画像削除
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products');
    }
}
