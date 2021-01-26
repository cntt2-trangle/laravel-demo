<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller {
    public function index() {
        return "List Category";
    }

    public function create() {
        return view('backend.category.create');
    }

    public function insert() {
        $category = new Categories();
        $category->name = "Coffee";
        $category->save();
    }

    public function GetURL(Request $request) {
        // return $request->url();
        if ($request->isMethod('get')) {
            echo "Get Method";
        } else {
            echo "Is not Get Method";
        }
    }
}