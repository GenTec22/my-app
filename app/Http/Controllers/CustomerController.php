<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = customer::orderBy('created_at', 'DESC')->get();

        return view('customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        customer::create($request->all());

        return redirect()->route('customer')->with('success', 'Customer added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = customer::findOrFail($id);

        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = customer::findOrFail($id);

        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = customer::findOrFail($id);

        $customer->update($request->all());

        return redirect()->route('customer')->with('success', 'Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = customer::findOrFail($id);

        $customer->delete();

        return redirect()->route('customer')->with('success', 'customer deleted successfully');
    }
}
