<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller {
    public function index() {

        // insert data

        return "List Product";
    }

    public function create() {
        return view('backend/product/create');
    }

    public function insert() {
        $product = new Products();
        $product->title = "G7";
        $product->desc = "G7 Coffee";
        $product->category_id = 2;
        $product->save();

    //     $product = Products::find(5);
    //     $product->delete();
    }
}