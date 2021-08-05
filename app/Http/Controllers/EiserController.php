<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class EiserController extends Controller
{
    public function index(){
        $categories = Category::where('status',1)->get();
        $featuredProducts = Product::skip(1)->take(3)->get();
        $newProducts = Product::orderBy('id','DESC')->take(4)->get();
        return view('front-end.home.home',[
            'categories'=>$categories,
            'featuredProducts' => $featuredProducts,
            'newProducts'=> $newProducts
        ]);
    }

    public function category(){
        return view('front-end.category.category');
    }
}
