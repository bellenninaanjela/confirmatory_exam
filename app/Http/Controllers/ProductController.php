<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProductController extends Controller
{

    // Display Menu blade
    public function index() {

        $products = Product::all();
     
        return Inertia::render('Menu',
            compact('products')
        );
    }

    // Display product table
    public function product_show() {
        $products = Product::with('variation')->get();

        return Inertia::render('ProductList',
            compact('products')
        );
    }
    
    // Display Product Create Form
    public function add_form() {

        $products = Product::all();
        $variations = Variation::all();
     
        return Inertia::render('CreateProducts',
            compact('products', 'variations')
        );
    }

    
    
    // Display Product Edit Form
    public function edit_form($id) {

        $product = Product::find($id);
        $variations = Variation::all();

        return Inertia::render('EditProduct',
            compact('product', 'variations')
        );
    }

    

    public function store_product(Request $request) {
        
        $product = new Product;
        $product->name = $request->product_name;
        $product->description = $request->product_description;
        $product->price = $request->product_price;

        $product->variation_id = $request->variation; 
    
        $product->save();
    
        return Redirect::route('product');
    }

    public function update_product(Request $request, $id) {

        $variations = Variation::all();

        $product = Product::find($id);
        $product->name = $request->product_name;
        $product->description = $request->product_description;
        $product->price = $request->product_price;

        $product->variation_id = $request->variation; 

        $product->save();
    
        return Redirect::route('product', compact('variations'));
    }

    public function delete_product($id) {
        $product = Product::find($id)->delete();
    }
}
