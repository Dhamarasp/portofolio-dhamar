<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    public function register()
    {
        return view('sesi.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required'
        ],[
            'name.required'     => 'Wajib Diisi',
            'email.required'    => 'Wajib Diisi',
            'email.email'       => 'Contoh Example@gmail.com',
            'password.required' => 'Wajib Diisi',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);
        
        return redirect()->route('login')->with('success', 'Berhasil Buat Akun');
    }

    public function index()
    {
        return view('sesi.login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email'         => 'required|email',
            'password'      => 'required'
        ],[
            'email.required'    => 'Wajib Diisi',
            'email.email'       => 'Contoh : Example@gmail.com',
            'password.required' => 'Wajib Diisi',
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $remember = ($request->has('remember')) ? true : false;
        
        if(Auth::attempt($login, $remember))
        {
            $request->session()->regenerate();

            $user = User::where('email', $request->email)->first();

            Auth::login($user, $remember);

            return redirect()->route('dashboard')
            
            ->with('success', 'Berhasil login!');
        }else{
            return redirect()->route('login')
            ->with('error', 'Username dan Password Salah');

        }

    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'See u Later');
    }
}
