<?php

namespace App\Http\Controllers\komentar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Comment;

class CommentController extends Controller
{
    public function nokomen() 
    {        
        return redirect('/login')->with('Comment', 'Silahkan login terlebih dahulu untuk bisa berkomentar.');
    }

    public function komen(Request $request, $id) 
    {
        $validatedData = $request->validate([
            'komentar' => 'required|string',
        ]);
        
        $data = new Comment();
        $data->komentar = $validatedData['komentar'];
        $data->id_user = $id;
        $data->save();

        return redirect()->back();

    }
}
