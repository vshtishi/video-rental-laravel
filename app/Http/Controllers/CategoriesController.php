<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Video;
use App\Models\VideoCategories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Categories::all();

        return view('categories', compact('categories'));
    }

    public function category($category) {
        $category = Categories::where('name', $category)->get();
        $products = VideoCategories::with('video')->where('category_id', $category[0]->id)->paginate(6);

        return view('category', compact('category', 'products'));
    }
}