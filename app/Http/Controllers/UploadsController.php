<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UploadsController extends Controller
{
    public function index()
    {
       $uploads = DB::table('uploads')
    ->leftJoin('gallerytypes', 'gallerytypes.id', '=', 'uploads.type_id')
    ->select(
        'uploads.*',
        'gallerytypes.type_name'
    )
    ->get();
        $types=DB::table('gallerytypes')->get();

        return view('uploads', compact('uploads','types'));
    }

    public function store(Request $request)
{
    $request->validate([
        'photo' => 'required',
        'photo.*' => 'image|mimes:jpg,jpeg,png,gif|max:5120',
        'status' => 'required|string|max:20',
    ]);

    if ($request->hasFile('photo')) {

       $type=$request->type;

        foreach ($request->file('photo') as $file) {

            $filename = time() . '_' . uniqid() . '_' . $file->getClientOriginalName();

            $file->move(
                public_path('uploads/photos'),
                $filename
            );

            $photoPath = 'uploads/photos/' . $filename;

            DB::table('uploads')->insert([
                'type_id'=>$type,
                'photo' => $photoPath,
                'status' => $request->status,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    return redirect()
        ->route('uploads')
        ->with('success', 'Photos uploaded successfully.');
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