<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    //
    public function view()
    {
        $outlets = Outlet::all();
        return view('auth.register' , compact('outlets'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'nama' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'outlets_id' => 'required',
        ],
    );
    user::create([
        'nama' => Str::camel($data['nama']),
        'username' => Str::lower($data['username']),
        'password' => bcrypt($data['password']),
        'role' => 'owner',
        'outlets_id' => Str::lower($data['outlets_id']),
    ]);
    return redirect('/login');
    }
}
