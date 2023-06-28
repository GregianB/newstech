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
    { {
            // Validate the input data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
            ]);

            // Create a new instance of the model and assign the validated data
            $data = new Data(); // Replace Data with your model name
            $data->name = $validatedData['name'];
            $data->email = $validatedData['email'];

            // Save the data to the database
            $data->save();

            // Optionally, you can also return a response or redirect to another page
            return response()->json(['message' => 'Data stored successfully']);
        }
    }
}
