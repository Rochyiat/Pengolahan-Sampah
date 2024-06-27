<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function index()
     {
        // $users = user::all();

        // return view('user.index', compact('users'));
     }

     public function create()
     {

     }

     public function store(request$request)
     {
        
     }


    public function edit($id)
    {
        $data = User::find($id);
        return view('users.edit', compact('data'));
    }
    

    public function update($id, request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            
        ]);

        $user = User::findOrFail($id);
        $userData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
         
        ];

        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->input('password'));
        }

        $user->update($userData);

        return redirect()->route('users.edit', $user->id)->with('success', 'User updated successfully.');
    }
          public function destroy($id){}
}
