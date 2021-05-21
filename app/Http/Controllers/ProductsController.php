<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index(){

        $products = Video::all();

        return view('all-products', compact('products'));
    }
}
