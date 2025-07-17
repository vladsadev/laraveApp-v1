<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{

    public function store()
    {
        //validate
        $validated = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(5), 'confirmed'], // password must match with password_confirmation
        ]);
        //create the user
        $user = User::create($validated);

        //login
        Auth::login($user);

        //redirect somewhere
        return redirect('/jobs');


    }

    public function create()
    {
        return view('auth.register');
    }
}
