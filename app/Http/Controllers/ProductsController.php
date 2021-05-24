<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;


class ProductsController extends Controller
{
    public function index(){

        $products = Video::paginate(6);

        return view('all-products', compact('products'));
    }

    public function product($category, $product) {
        $video = Video::where('title', $product)->get();

        return view('product', compact('category', 'video'));
    }

    public function home() {
        $products = Video::all()->take(-3);

        return view('welcome', compact('products'));
    }
}
