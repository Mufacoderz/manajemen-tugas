<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = array(
            'title'         => 'Data User',
            'menuAdminUser' => 'active',
            'user'      => User::get(),
        );
        return view('admin/user/index', $data);
    }
    public function create()
    {
        $data = array(
            'title'         => 'Tambah Data User',
            'menuAdminUser' => 'active',
        );
        return view('admin/user/create', $data);
    }
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama'         => 'required',
            'email'        => 'required|email|unique:users,email',
            'jabatan'      => 'required',
            'password'     => 'required|confirmed|min:8',
        ],[
            'nama.required'         => 'Nama harus diisi',
            'email.required'        => 'Email harus diisi',
            'email.email'           => 'Email tidak valid',
            'email.unique'          => 'Email sudah digunakan',
            'jabatan.required'      => 'Jabatan harus dipilih',
            'password.required'     => 'Password harus diisi',
            'password.confirmed'    => 'Konfirmasi password tidak cocok',
            'password.min'          => 'Password minimal 8 karakter',
        ]);
    }
}
