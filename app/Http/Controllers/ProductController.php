<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Variation;
use Illuminate\Http\Request;
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
    public function form_index() {

        $products = Product::all();
     
        return Inertia::render('CreateProducts',
            compact('products')
        );
    }

    

    public function product_store(Request $request) {

        $product = new Product;
        $product->name = $request->product_name;
        $product->description = $request->product_description;
        $product->price = $request->product_price;

        $variation = new Variation;
        $variation->name = $request->variation;

        $product -> save();
        $variation -> save();

        return Inertia::render(
            'CreateMenu',
            compact('product', 'variation')
        );
    }

}
