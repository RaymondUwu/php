<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accounts;

class accountscontroller extends Controller
{
    public function index(){
        $accounts = accounts::all();
        return view('accounts.index', ['accounts' => $accounts]);
    }
    public function create(){
        return view('accounts.create');
    }
    public function register(Request $request){
        $data = $request->validate([
            'fullname' => 'required',
            'contactnumber' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $newAccount = accounts::create($data);
        return redirect(route('accounts.index'));
    }
    public function edit(accounts $accounts){
        return view('accounts.edit', ['accounts' => $accounts]);
    }
    public function update(accounts $accounts, Request $request){
        $data = $request->validate([
            'fullname' => 'required',
            'contactnumber' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $accounts->update($data);

        return redirect (route('accounts.index'))->with('Account Successfully Updated!');
    }
    public function destroy(accounts $accounts){
        $accounts->delete();
        return redirect (route('accounts.index'))->with('Deleted Successfully!');
    }
}
