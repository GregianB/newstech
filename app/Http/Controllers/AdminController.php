<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    function showAdmin()
    {
        return view('admin.main');
    }

    function getData()
    {
        $data = Data::all();

        return view('admin.main', ['data' => $data]);
    }

    function postData(Request $request)
    {
        $validatedData = $request->validate([
            'judul_berita' => 'required|string|max:255',
            'isi_berita' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        $image = $request->file('image');

        if ($image) {
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images'), $image->getClientOriginalName());
        }

        $data = new Data();
        $data->judul_berita = $validatedData['judul_berita'];
        $data->isi_berita = $validatedData['isi_berita'];
        $data->image = $filename;
        $data->save();

        return redirect('/admin')->with('Berhasil', 'Berhasil menambahkan berita');
    }

    function editData(Request $request, $id)
    {
        $item = Data::find($id);

        if ($item) {
            // Handle image upload
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images');
                $item->image = $imagePath;
            } else {
                $image = $request->file('image');
                if ($image) {
                    $filename = $image->getClientOriginalName();
                    $image->move(public_path('images'), $image->getClientOriginalName());
                    $item->image = $filename;
                }
            }

            // Handle other form field updates
            $item->judul_berita = $request->input('judul_berita');
            $item->isi_berita = $request->input('isi_berita');

            $item->save();

            return redirect('/admin')->with('Berhasil', 'Berhasil mengubah berita');
        }
    }

    function deleteData($id)
    {
        $item = Data::find($id);
        $path = 'images/' . $item->image;

        if ($item) {
            // Storage::disk('public')->delete($path);
            Storage::delete($path);
            $item->delete();
            return redirect('/admin')->with('Berhasil', 'Berhasil menghapus berita');
        }

        return redirect('/admin')->with('Gagal', 'Gagal menghapus berita');
    }
}
