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

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $addresses = Address::searchByName($keyword);

        $message = '';
        if ($addresses->isEmpty()) {
            $message = 'No results found.';
        }

        return view('addresses.search', compact('addresses', 'message'));
    }


        public function destroy(Address $address)
        {
            $address->delete();
            return redirect()->route('AllAddresses')->with('success', 'Address deleted successfully');
        }

       public function edit(Address $address)
       {
            return view('addresses.edit', compact('address'));

       }
        
       public function update(Request $request, Address $address)
        {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ]);

        $address->update($request->all());

        return redirect()->route('AllAddresses')->with('success', 'Address updated successfully');
        }




}
