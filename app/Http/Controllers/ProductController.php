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
        $products = Product::all();

        return Inertia::render('ProductList',
            compact('products')
        );
    }
    
    // Display Product Create Form
    public function add_form() {

        $products = Product::all();
     
        return Inertia::render('CreateProducts',
            compact('products')
        );
    }

    
    
    // Display Product Edit Form
    public function edit_form(Product $id) {

        $products = Product::find($id);
     
        return Inertia::render('EditProduct',
            compact('products')
        );
    }

    

    public function store_product(Request $request) {
        
        // $variation = Variation::find($variationId);
        
        $product = new Product;
        $product->name = $request->product_name;
        $product->description = $request->product_description;
        $product->price = $request->product_price;

        $product->variation = $request->variation; 
    
        $product->save();
    
        return Redirect::route('product');
    }

    public function edit_product(Request $request, Product $id) {
               
        $product = Product::find($id);
        $product->name = $request->product_name;
        $product->description = $request->product_description;
        $product->price = $request->product_price;

        $product->variation = $request->variation; 
    
        $product->save();
    
        return Redirect::route('product');
    }
}
