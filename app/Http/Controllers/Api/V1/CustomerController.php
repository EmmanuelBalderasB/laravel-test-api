<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CustomerResource;
use App\Http\Resources\V1\CustomerCollection;


class CustomerController extends Controller
{
    public function index()
    {
        return new CustomerCollection(Customer::paginate());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }


    
    public function edit(Customer $customer)
    {
        //
    }

    public function update(Request $request, Customer $customer)
    {
        //
    }

 
    public function destroy(Customer $customer)
    {
        //
    }
}