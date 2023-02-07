<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Mail\UserUpdated;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        return view('pages.customers.create');
    }

    public function store(Request $request)
    {
        Customer::create($request->all());

        return to_route('customers.index');
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

        $email = new UserUpdated(
                $customer->id,
                $customer->firstName,
                $customer->lastName,
                $customer->email,
                $customer->phone
        );

        $when = now()->addSeconds(2);
        Mail::to($customer->email)->later($when, $email);

        return to_route('customers.index');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return to_route('customers.index');
    }
}