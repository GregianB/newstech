<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class GuestController extends Controller
{
    function show()
    {
        $data = Data::latest()->paginate(3);

        return view('user.home', ['data' => $data]);
    }

    function berita()
    {
        $data = Data::all();

        return view('user.berita', ['data' => $data]);
    }

    function detail_berita($id)
    {
        $data = Data::find($id);

        return view('user.detail-berita', ['data' => $data]);
    }
}
