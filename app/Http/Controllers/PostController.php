<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function dataMethod() {
        return view('data');
    }
    public function storeMethod(Request $request) {

        $validated = $request->validate([
            'name' => 'required|unique:posts|max:255',
            'email' => 'required',
            'age' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg|max:20480',
        ]);

        $imageName = null;
        if (isset($request->image)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $flight = new post();
        
        $flight->name = $request->name;
        $flight->age = $request->age;
        $flight->email = $request->email;
        $flight->image = $imageName;
        

        $flight->save();
        return redirect()->route('home')->with('success', 'Item successfully created!');
    }
}