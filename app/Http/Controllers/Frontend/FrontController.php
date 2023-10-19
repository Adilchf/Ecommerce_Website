<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class FrontController extends Controller
{
    public function index(){
        $featured_products = Products::where('trending','1')->take(10)->get();

        return view('frontend.index', compact('featured_products'));

    }

    public function category(){
        $category = Category::where('status','0')->get();
        return view('frontend.category',compact('category'));
    }
}
