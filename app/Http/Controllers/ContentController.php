<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    //
    public function create()
    {
        return view('admin.create-content');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Content::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(), // Menghubungkan konten dengan admin yang menambahkannya
        ]);

        return redirect()->route('content.create')->with('success', 'Content added successfully');
    }

}
