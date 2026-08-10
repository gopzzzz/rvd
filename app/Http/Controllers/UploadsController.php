<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadsController extends Controller
{
    public function index()
    {
        $uploads = DB::table('uploads')->get();

        return view('uploads', compact('uploads'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif|max:5120',
            'status' => 'required|string|max:20',
        ]);

        $file = $request->file('photo');

        $filename = time() . '_' . $file->getClientOriginalName();

        $file->move(
            public_path('uploads/photos'),
            $filename
        );

        $photoPath = 'uploads/photos/' . $filename;

        DB::table('uploads')->insert([
            'photo' => $photoPath,
            'status' => $request->status,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('uploads')
            ->with('success', 'Upload added successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'status' => 'required|string|max:20',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120',
        ]);

        $data = [
            'status' => $request->status,
            'updated_at' => now(),
        ];

        if ($request->hasFile('photo')) {

            $file = $request->file('photo');

            $filename = time() . '_' . $file->getClientOriginalName();

            $file->move(
                public_path('uploads/photos'),
                $filename
            );

            $data['photo'] = 'uploads/photos/' . $filename;
        }

        DB::table('uploads')
            ->where('id', $request->id)
            ->update($data);

        return redirect()
            ->route('uploads')
            ->with('success', 'Upload updated successfully.');
    }
}