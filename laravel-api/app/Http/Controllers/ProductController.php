<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Retrieve all products from the database
        $products = Product::all();

        // Return the products as a JSON response
        return response()->json($products);
    }
}
