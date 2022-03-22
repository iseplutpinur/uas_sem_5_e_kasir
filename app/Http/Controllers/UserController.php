<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'title' => 'Pengguna',
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('user.create', [
            'title' => 'Tambah Pengguna'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'confirm_password' => ['required', 'same:password'],
            'password' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'username' => ['required', 'unique:users'],
            'name' => ['required'],
        ], [
            'confirm_password.required' => 'Konfirmasi password tidak boleh kosong.',
            'confirm_password.same' => 'Konfirmasi password tidak sesuai, harap cek kembali.',
            'password.required' => 'Password tidak boleh kosong.',
            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Email tidak valid.',
            'email.unique' => 'Email sudah digunakan, harap gunakan email lain.',
            'username.required' => 'Username tidak boleh kosong.',
            'username.unique' => 'Username sudah digunakan, harap gunakan username lain.',
            'name.required' => 'Nama tidak boleh kosong.'
        ]);

        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return response()->json(['alert' => 'Data berhasil disimpan!'], 200);
    }
}
