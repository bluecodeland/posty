<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct() 
    {
        $this->middleware(['guest']);
    }

    public function index() {

        return view('auth.login');
    }


    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

         //sign in after Login
        if (!auth()->attempt($request->only('email','password'), $request->remember)) {
            return back()->with('status', 'invalid login details');

        }
            
         //show dashboard after  singed in
         return redirect()->route('dashboard');
         
    }
}