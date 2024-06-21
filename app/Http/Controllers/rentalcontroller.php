<?php

namespace App\Http\Controllers;

use App\Models\accounts;
use Illuminate\Http\Request;
use App\Models\rentals;
class rentalcontroller extends Controller
{
    public function index(){
        $rentals = rentals::all();
        $account = accounts::all();
        return view('rentals.index', compact('rentals', 'account'));
    }
    public function create(){
        $accounts = accounts::all();
        return view('rentals.create', compact('accounts'));
    }
    public function store(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'account_id' => 'required',
            'property' => 'required',
            'address' => 'required',
            'contactnumber' => 'required',
            'email'=> 'required'
        ]);

        $newRental = rentals::create($data);
        return redirect(route('rentals.index'));
    }
    public function edit(rentals $rental){
        $accounts = accounts::all();
        return view('rentals.edit',compact('rental', 'accounts'));
    }
    public function update(rentals $rental, Request $request){
        $data = $request->validate([
            'property' => 'required',
            'address' => 'required',
            'contactnumber' => 'required',
            'email'=> 'required',
            'account_id'=> 'required'
        ]);

        $rental->update($data);

        return redirect (route('rentals.index'))->with('Account Successfully Updated!');
    }
    public function destroy(rentals $rental){
        $rental->delete();
        return redirect (route('rentals.index'))->with('Deleted Successfully!');
    }
}
