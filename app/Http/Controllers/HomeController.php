<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Variation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {
        
        // $variations = Variation::join('products', 'products.variation_id', 'variations.id')->get();

        // $beef = Product::where('variation_id', 1)->get();
        // $chicken = Product::where('variation_id', 2)->get();
        // $veggy = Product::where('variation_id', 3)->get();

        $variations = Variation::all();
        $variationProducts = [];

        foreach ($variations as $var) {
            $products = Product::where('variation_id', $var->id)->get();

            $variationProducts[$var->name] = $products;
        }

        $beef = $variationProducts['Beef'];
        $chicken = $variationProducts['Chicken'];
        $veggy = $variationProducts['Veggies'];

        return Inertia::render('Welcome', compact('variations', 'beef', 'chicken', 'veggy'));
    }

    // Displays category vue
    public function category_index($category_id) {
        $category = Variation::find($category_id);

        $products = Product::where('variation_id', $category_id)->get();

        return Inertia::render('CategoriesView', compact('products', 'category'));
    }
}
