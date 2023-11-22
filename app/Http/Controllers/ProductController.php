<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('category');

        // Fetch unique categories for the dropdown
        $uniqueCategories = Product::distinct()->pluck('category');

        // Fetch products based on the category (if provided)
        $products = $category
            ? Product::where('category', $category)->get()
            : Product::all();

        return view('products.index', ['products' => $products, 'uniqueCategories' => $uniqueCategories]);
    }
}