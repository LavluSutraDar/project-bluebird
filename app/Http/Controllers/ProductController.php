<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('backend.product.create',compact('categories'));
    }
}
