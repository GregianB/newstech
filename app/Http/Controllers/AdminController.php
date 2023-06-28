<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

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
        // Validate the input data
        $validatedData = $request->validate([
            'judul_berita' => 'required|string|max:255',
            'isi_berita' => 'required|string|max:255',
            'image' => 'required|image|max:2048', // Max file size: 2MB (2048 kilobytes)
        ]);

        // Create a new instance of the model and assign the validated data
        $imagePath = $request->file('image')->store('images', 'public');

        // Create a new instance of the model and assign the validated data
        $data = new Data(); // Replace Data with your model name
        $data->name = $validatedData['name'];
        $data->email = $validatedData['email'];
        $data->image = $imagePath;

        // Save the data to the database
        $data->save();

        // Optionally, you can also return a response or redirect to another page
        return response()->json(['message' => 'Data stored successfully']);
    }
}
