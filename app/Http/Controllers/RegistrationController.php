<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    
    public function create()

    {

    	return view('registration.create');

    }

    public function store()

    {

    	// Validate the form

    	$this->validate(request(), [

    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed'

    	]);

    	//Create and save the user
        $name = request('name');
        $email = request('email');
        $password = bcrypt(request('password'));

        $user = User::create(compact('name','email','password'));
    	// Sign in te user

    	auth()->login($user);

    	//Redirect

    	return redirect('/');



    }
}
