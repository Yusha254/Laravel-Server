<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        // Fetch all customers and return them as a JSON response
        $customers = Customer::all();
        return response()->json($customers);
    }
}
