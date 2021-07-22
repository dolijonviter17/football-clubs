<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function __construct() {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        // dd($request->only('email', 'password'));
       $this->validate($request, [
           'name' => 'required|max:255',
           'email' => 'required|email|max:255',
           'password' => 'required|confirmed',
       ]);

       User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => \Hash::make($request->password)
       ])->attachRole('club');
       auth()->attempt($request->only('email', 'password'));
       return redirect()->route('dashboard');

    }
}
