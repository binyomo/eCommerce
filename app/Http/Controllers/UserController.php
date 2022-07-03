<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
    	return view('user.index', [
    		
    	]);
    }

    public function login()
    {
    	return view('user.login', [
    		
    	]);
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect('/user')->with('success', 'Sudah Login');
        }

    	return view('user.register', [
    		
    	]);
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $remember = $request->get('remember');

        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();
            return redirect()->intended('/user')->with('success', 'Login Berhasil!, Hai!!!');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
        	'email' => 'required|email',
            'username' => 'required|unique:users',
            'password' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/user/login')->with('success', 'Tambah User Berhasil!');
    }

    public function logout(Request $request) 
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();     

        return redirect('/');
    }
}