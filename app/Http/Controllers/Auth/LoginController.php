<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // protect route with middleware
    public function __construct() {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('login.index');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid email and password');
        }
        if (\Auth::user()->hasRole('club')) {
            return redirect()->route('dashboard');
        } elseif (\Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
        }
        
        
    }
}
