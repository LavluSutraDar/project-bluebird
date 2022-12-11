<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::take(2)->get();
        return view('frontend.home.index',[
            'categories' => $categories,
        ]);
    }
}
