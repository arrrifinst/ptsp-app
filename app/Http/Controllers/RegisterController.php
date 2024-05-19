<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            "title" => "Register"
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users|min:5|max:144',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:5'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        // $request->session()->flash('success', 'Registrasi berhasil, silahkan login');
        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login');
    }
}
