<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create(Request $request)
    {
        // $fileName = time().$request->file('photo')->getClientOriginalName();
        // $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        // $request->photo->move(public_path('images'), $fileName);
        // dd($request);
        // dd($request->all());
        // Photo::create((array)$request);
        // dd($request['photo']); 

        $imageName = time().'.'.$request->photo->extension();  
        $request->photo->move(public_path('images'), $imageName);
        $request->photo = 'images/'.$imageName;
        Photo::create((array)$request);
        dd('images/'.$imageName);
    }
}
