<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class StudentLifeController extends Controller
{
    // List
    public function index()
    {
        $studentLives = DB::table('studentlifes')
            ->orderBy('id', 'asc')
            ->get();

        return view('student_life', compact('studentLives'));
    }

    // Add
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|integer|in:1,2,3,4',
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {

         
            $file = $request->file('image');

            $folder = public_path(
                'uploads/studentlife'
            );

            if (!File::exists($folder)) {

                File::makeDirectory(
                    $folder,
                    0755,
                    true
                );
            }

            $filename =
                time() . '_' .
                $file->getClientOriginalName();

            $file->move(
                $folder,
                $filename
            );

            $photoPath =
                'uploads/studentlife/' .
                $filename;

        }
        

        DB::table('studentlifes')->insert([
            'type' => $request->type,
            'title' => $request->title,
            'image' => $photoPath,
            'description' => $request->description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('student-life.index')
            ->with('success', 'Student Life Added Successfully');
    }

    // Edit - get data
    public function edit($id)
    {
        $studentLife = DB::table('studentlifes')
            ->where('id', $id)
            ->first();

        return response()->json($studentLife);
    }

    // Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|integer|in:1,2,3,4',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required|string',
        ]);

        $studentLife = DB::table('studentlifes')
            ->where('id', $id)
            ->first();

        if (!$studentLife) {
            return redirect()
                ->route('student-life.index')
                ->with('error', 'Record not found.');
        }

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $folder = public_path(
                'uploads/studentlife'
            );

            if (!File::exists($folder)) {

                File::makeDirectory(
                    $folder,
                    0755,
                    true
                );
            }

            $filename =
                time() . '_' .
                $file->getClientOriginalName();

            $file->move(
                $folder,
                $filename
            );


            // Delete old photo
            if (!empty($faculty->photo)) {

                $oldPhoto =
                    public_path($faculty->photo);

                if (File::exists($oldPhoto)) {

                    File::delete($oldPhoto);
                }
            }


            $photoPath =
                'uploads/studentlife/' .
                $filename;
        }


        DB::table('studentlifes')
            ->where('id', $id)
            ->update([
                'type' => $request->type,
                'title' => $request->title,
                'image' => $photoPath,
                'description' => $request->description,
                'updated_at' => now(),
            ]);

        return redirect()
            ->route('student-life.index')
            ->with('success', 'Student Life Updated Successfully');
    }

    // Delete
    public function destroy($id)
    {
        $studentLife = DB::table('studentlifes')
            ->where('id', $id)
            ->first();

        if ($studentLife) {

            if ($studentLife->image &&
                Storage::disk('public')->exists($studentLife->image)) {

                Storage::disk('public')->delete($studentLife->image);
            }

            DB::table('studentlifes')
                ->where('id', $id)
                ->delete();
        }

        return redirect()
            ->route('student-life.index')
            ->with('success', 'Student Life Deleted Successfully');
    }
}