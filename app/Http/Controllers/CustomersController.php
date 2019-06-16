<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use App\Company;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $activeCustomers = Customers::active()->get();
        // $inactiveCustomers = Customers::inactive()->get();
        $customers = Customers::all();

        // return view('customers.index', compact('activeCustomers', 'inactiveCustomers'));

        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $companies = Company::all();

        $customer = new Customers();
        return view('customers.create', compact('companies', 'customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data  = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'active' => 'required',
            'company_id' => ''
        ]);

        Customers::create($data);

        // $customers = new Customers();
        // $customers->name = request('name');
        // $customers->email = request('email');
        // $customers->active = request('active');

        // $customers->save();
        
        return redirect('customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customer)
    {
        //
        // $customer = Customers::find($customer);
        
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customer)
    {
        //
        $companies = Company::all();

        return view('customers.edit', compact('customer', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Customers $customer)
    {
        //
        $data  = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'active' => 'required',
            'company_id' => ''
        ]);

        $customer->update($data);

        return redirect('customers/' . $customer->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
