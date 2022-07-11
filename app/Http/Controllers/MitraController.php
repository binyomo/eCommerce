<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\Mitra;

class MitraController extends Controller
{
    public function index()
    {
    	return view('mitra.index', [
    		
    	]);
    }

    public function login()
    {
    	return view('mitra.login.login', [
    		
    	]);
    }

    public function register()
    {
        if (Auth::guard('mitra')->check()) {
            return redirect('/mitra')->with('success', 'Sudah Login');
        }

    	return view('mitra.login.register', [
    		
    	]);
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $remember = $request->get('remember');

        if(Auth::guard('mitra')->attempt($credentials, $remember)){
            $request->session()->put('mitra');
            return redirect()->intended('/mitra')->with('success', 'Login Berhasil!, Hai!!!');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
        	'email' => 'required|email',
            'username' => 'required|unique:mitras',
            'password' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Mitra::create($validatedData);

        return redirect('/mitra/login')->with('success', 'Tambah Mitra Berhasil!');
    }

    public function logout(Request $request) 
    {
        Auth::logout();

        $request->session()->forget('mitra');

        $request->session()->regenerateToken();     

        return redirect('/');
    }
}