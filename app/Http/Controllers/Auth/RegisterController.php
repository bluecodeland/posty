<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct() 
    {
        $this->middleware(['guest']);
    }
    
        
    
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // dd($request->get('name'));
        $this->validate($request, [
            'username' => ['required', 'max:255', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],


        ]);

            // dd('store');
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),


            ]);
            //sign in after register
            auth()->attempt($request->only('email','password'));
            
            //show dashboard after registered and singed in
            return redirect()->route('dashboard');
    }
}
  