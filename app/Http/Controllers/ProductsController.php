<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index(){

        $product = array('id' => 1, 'name' => 'test', 'price' => 500);

        return view('all-products', compact('product'));
    }
}
