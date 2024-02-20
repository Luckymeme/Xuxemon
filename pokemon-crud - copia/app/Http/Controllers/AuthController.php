<?php

// En AuthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Pokemon;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pokemons.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    $user = User::where('email', $credentials['email'])->first();

    if ($user && $user->password === $credentials['password']) {
        Auth::login($user);
        return redirect()->intended('/dashboard');
    }

    return back()->withErrors(['email' => 'Invalid credentials']);
}




    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function dashboard()
    {
        $user = Auth::user();
        $pokemons = Pokemon::all();
        if ($user->role == 1) {
            return view('pokemons.veer', compact('pokemons'));
        } else {
            return view('pokemons.index', compact('pokemons'));
        }
    }





}
