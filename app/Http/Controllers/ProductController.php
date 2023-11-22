<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('category');

        // Fetch unique categories for the dropdown
        $uniqueCategories = Products::distinct()->pluck('category');

        // Fetch products based on the category (if provided)
        $products = $category
            ? Products::where('category', $category)->get()
            : Products::all();

        return view('products.index', ['products' => $products, 'uniqueCategories' => $uniqueCategories]);
    } 
}