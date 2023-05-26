<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {

        $categories = Category::all();
        $categoryProducts = [];

        foreach ($categories as $category) {
            $products = Product::where('category_id', $category->id)->get();

            $categoryProducts[$category->name] = $products;
        }

        $beef = $categoryProducts['Beef'];
        $chicken = $categoryProducts['Chicken'];
        $veggy = $categoryProducts['Veggies'];

        return Inertia::render('Welcome', compact('categories', 'beef', 'chicken', 'veggy'));
    }

    // Displays category vue
    public function category_index($category_id) {
        $category = Category::find($category_id);

        $products = Product::where('category_id', $category_id)->get();

        return Inertia::render('CategoriesView', compact('products', 'category'));
    }
}
