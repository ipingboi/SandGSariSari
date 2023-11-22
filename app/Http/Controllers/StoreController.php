<?php

namespace App\Http\Controllers;




use App\Models\Products;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {
        return view('store.index' , ['products' => Products::latest()->paginate(8)]);
    }

    public function register() {
        return view('components.register');
    }
    public function login() {
        return view('components.login');
    }
    public function about() {
        return view('components.aboutus');
    }

    public function manageproduct() {
        return view('components.adminmanageprod' , ['products' => Products::all()]);
    }

    public function product(Products $product) {
        return view('store.product' , [
            'product' => $product
        ]);
    }

    public function store(Request $request) {
        // dd($request->all()); 
        // dd($request->file('logo'));
        $formFields = $request->validate([
            'productbrand' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);
        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Products::create($formFields);

        return back()->with('message', 'Product Added Successfully!');
    }

    //Update Product Data
    public function update(Request $request, Products $product){        
        $formFields = $request->validate([
            'productbrand' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);
        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $product-> update(($formFields));

        return back()->with('message', 'Product updated successfully!');

    }

    
}
