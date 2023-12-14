<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function authenticate(Request $request) {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
    
        $pengguna = Pengguna::find($request->input('username'));
    
        if ($pengguna && Hash::check($request->input('password'), $pengguna->password)) {
            // Password is correct
            $request->session()->put('username', $pengguna->username);
            $request->session()->put('type', $pengguna->type);
    
            return redirect('/');
        }
    
        return redirect('/login')->with('error', 'Kombinasi pengguna dan kata sandi tidak valid');
    }

    public function register(Request $request) {
        $request->validate([
            'username' => ['required', 'string', 'unique:penggunas'],
            'password' => ['required', 'string'],
            'nama' => ['required', 'string'],
        ]);
    
        // Create a new Pengguna instance
        $pengguna = new Pengguna([
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')), // Hash the password using Hash facade
            'nama' => $request->input('nama'),
            'type' => 0,
        ]);
    
        // Save the Pengguna instance to the database
        $pengguna->save();
    
        return redirect('/login')->with('success', 'Pengguna berhasil didaftarkan');
    }

    public function logout(Request $request) {
        $request->session()->forget(['username', 'type']);

        return redirect('/');
    }
}
