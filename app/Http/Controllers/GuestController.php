<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    function show()
    {
        return view('user.home');
    }

    function berita()
    {
        return view('user.berita');
    }

    function detail_berita()
    {
        return view('user.detail-berita');
    }
}
