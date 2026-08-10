<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->get();

        return view('news', compact('news'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,jpg,png,gif|max:5120',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $file = $request->file('photo');

        $filename = time() . '_' . $file->getClientOriginalName();

        $file->move(
            public_path('uploads/news'),
            $filename
        );

        $photoPath = 'uploads/news/' . $filename;

        DB::table('news')->insert([
            'photo' => $photoPath,
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('news')
            ->with('success', 'News added successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:5120',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'updated_at' => now(),
        ];

        if ($request->hasFile('photo')) {

            $file = $request->file('photo');

            $filename = time() . '_' . $file->getClientOriginalName();

            $file->move(
                public_path('uploads/news'),
                $filename
            );

            $data['photo'] = 'uploads/news/' . $filename;
        }

        DB::table('news')
            ->where('id', $request->id)
            ->update($data);

        return redirect()
            ->route('news')
            ->with('success', 'News updated successfully.');
    }
}