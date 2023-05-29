<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
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
        $products = Product::with('category')->get();

        return Inertia::render('ProductList',
            compact('products')
        );
    }
    
    // Display Product Create Form
    public function add_form() {

        $products = Product::all();
        $categories = Category::all();
     
        return Inertia::render('CreateProducts',
            compact('products', 'categories')
        );
    }

    
    
    // Display Product Edit Form
    public function edit_form($id) {

        $product = Product::find($id);
        $categories = Category::all();

        return Inertia::render('EditProduct',
            compact('product', 'categories')
        );
    }

    

    public function store_product(Request $request) {

        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'category' => 'required',
        ]);
        
        $product = Product::create([
            'name' => $request['product_name'],
            'description' => $request['product_description'],
            'price' => $request['product_price'],
    
            'category_id' => $request['category'], 
        ]);

        // Product::create($request->all());

        return Inertia::location(route('product'));
    }

    public function update_product(Request $request, $id) {
        $categories = Category::all();

        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'category' => 'required',
        ]);

        $product = Product::find($id);
        $product->update([
            'name' => $request->product_name,
            'description' => $request->product_description,
            'price' => $request->product_price,
            'category_id' => $request->category,
        ]);
        
    
        return Inertia::location(route('product', compact('categories')));
    }

    public function delete_product(Product $product) {
        
        // $product = Product::find($product);
        // $product = Product::where('id', $product);

        $product->delete();
        return Inertia::location(route('product'));

    }
}
