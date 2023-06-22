<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    public function create()
    {
        $addresses = Address::all();

        return view('addresses.create', compact('addresses'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ]);

        Address::create($validatedData);

        return redirect('/addresses')->with('success', 'Address added successfully!');
    }

    public function showAll()
{
    $addresses = Address::all();

    return view('addresses.all', compact('addresses'));
}

}
