<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index (Request $request)
    {
        $customers = Customer::all();
        $messageSuccess = session("message.success");

        return view('pages.customers.index')
            ->with('customers_list', $customers)
            ->with('messageSuccess', $messageSuccess);
    }

    public function create ()
    {
        
    }

    public function store ()
    {

    }
    
    public function edit (Customer $customer)
    {
        return view('pages.customers.edit')
            ->with('customer', $customer);
    }
}
