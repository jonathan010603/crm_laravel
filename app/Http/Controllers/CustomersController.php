<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(Request $request)
    {
        try {
            $customers = Customer::all();
            $messageSuccess = session("message.success");

            return view('pages.customers.index')
                ->with('customers_list', $customers)
                ->with('messageSuccess', $messageSuccess);
        } catch (\Exception $error) {
            return view('pages.special.error')
                ->with('goal', 'customers.index');
        }
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit(Customer $customer)
    {
        return view('pages.customers.edit')
            ->with('customer', $customer);
    }

    public function update(Customer $customer, Request $request) 
    {
        $customer->fill($request->all());
        $customer->save();

        return to_route('customers.index');
    }
}