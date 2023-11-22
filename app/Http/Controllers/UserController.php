<?php

namespace App\Http\Controllers;


use App\Models\Products;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function adminpage() {
        return view('components.adminpage');
    }

    public function manageproduct() {
        return view('components.adminmanageprod' , ['products' => Products::all()]);
    }

    

    
}
