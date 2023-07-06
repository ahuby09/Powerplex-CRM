<?php
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    // Method to show the form for creating a new user
    public function showCreateUserForm()
    {
        return view('user.create-user');
    }

    public function edit(User $user)
    {
         return view('user.edit',compact('user'));
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
}
