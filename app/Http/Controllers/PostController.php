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
            'image' => 'nullable|mimes:jpg,png,jpeg|max:20480',
        ]);
        

        $flight = new post();
        
        $flight->name = $request->name;
        $flight->email = $request->email;
        $flight->image = time().'.'.$request->image->extension();

        $flight->save();
        return redirect()->route('home')->with('success', 'Item successfully created!');
    }
}