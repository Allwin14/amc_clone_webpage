<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class ApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'email' => 'required|email|max:255',
            'phone'=>'required|string',
            'gender' => 'required|string',
            'course' => 'required|string',
        ]);

        // Connect to MongoDB and select the collection
        $mongo = new Mongo(env('MONGO_DSN'));
        $collection = $mongo->clg_reg->clg_reg;


        // Insert the validated data into the MongoDB collection
        $collection->insertOne([
            'name' => $validatedData['name'],
            'password' => $validatedData['password'], // Hash the password before storing
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'gender' => $validatedData['gender'],
            'course' => $validatedData['course'],
            'created_at' => time(),
        ]);

        // Redirect to a success page or return a response
        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
