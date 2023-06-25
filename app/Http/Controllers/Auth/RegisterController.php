<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    function show()
    {
        return view('auth.register');
    }

    //untuk simpan data ke database

    public function register(Request $request)
    {
        $level = 2;
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $level;
        $user->save();

        return redirect('/login')->with('Success', 'Berhasil Mendaftar, Silahkan Login!');
        //return "berhasil simpan";
    }
}
