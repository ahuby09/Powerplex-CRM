<?php
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Company;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $companies = Company::with('users')->get();
        return view('user.index', ['companies' => $companies]);
    }
    // Method to show the form for creating a new user
    public function showCreateUserForm()
    {
        return view('user.create-user');
    }

    public function edit(User $user)
    {
         return view('user.edit',compact('user'));
    }
    public function listEmployees()
    {
        $employees = User::with('leads')->where('companyID', 1)->get();
        return view('employee.index', compact('employees'));
    }
    public function signOut()
    {
    Auth::logout();
    return redirect()->route('login'); // Replace 'login' with your desired redirect route
    }
    public function update(UpdateUserRequest $request, $id)
    {

        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
        ]);

        User::whereId($id)->update($validatedData);


        return redirect()->route('user.index')
                        ->with('success','User updated successfully');
    }
    // Method to handle the form submission and create a new user
    public function createUser(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'companyID' => 'nullable',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'companyID' => $request->input('companyID'),
            'password' => Hash::make($request->input('password')),
        ]);


        // Assign user roles and permissions as needed
        // ...

        // Redirect or return a response
        return redirect()->back()->with('success', 'User created successfully.');
    }
    public function showLeads(User $employee)
    {
        $leads = $employee->leads()->get();
        return view('employee.showleads', compact('employee', 'leads'));
    }

}
