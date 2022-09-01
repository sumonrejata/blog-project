<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{

    public function createregister()
    {
        return view('frondend/home');
    }

    public function InsertRegister(Request $request)
    {
        
        Registration::insert([
            'firstname' =>$request->firstname,
            'lastname' =>$request->lastname,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'password' =>$request->password,
        ]);
        return back();
    }
}
