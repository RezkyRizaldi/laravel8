<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function login()
	{
		return view('auth.login');
	}

  public function register()
	{
		return view('auth.register');
	}

	public function registration(RegisterRequest $request)
	{
		User::create($request->validated());
		$request->session()->flash('success', 'Account created successfully! Please login.');

		return redirect()->route('login')->with('success', 'Account created successfully! Please login.');
	}

	public function authenticate(LoginRequest $request)
	{
		$credentials = $request->validated();

		if (Auth::attempt($credentials)) {
			$request->session()->regenerate();

			return redirect()->intended('dashboard');
		}

		return back()->with('error', "These credentials doesn't match with any record!");
	}

	public function logout(Request $request)
	{
		Auth::logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect()->route('login');
	}
}
