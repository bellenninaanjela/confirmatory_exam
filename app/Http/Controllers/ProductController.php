<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index() {
     
        $products = json_decode(file_get_contents(storage_path()."./menu.json"), true);

        return Inertia::render('Menu',
            compact('products')
        );
    }
}
