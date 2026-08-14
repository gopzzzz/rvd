<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FacultiesController extends Controller
{
    // ============================================
    // SHOW FACULTIES
    // ============================================

    public function index()
    {
        $faculties = DB::table('faculties')
         ->leftJoin('department', 'faculties.department_id', '=', 'department.id')
                ->select(
                    'faculties.*',
                    'department.name as department_name'
                )
                ->get();

        $departments = DB::table('department')->get();

        return view(
            'faculties',
            compact('faculties', 'departments')
        );
    }


    // ============================================
    // STORE FACULTY
    // ============================================

    public function store(Request $request)
    {
        $request->validate([

            'department_id' => [
                'required',
                'integer'
            ],

            'name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s.]+$/'
            ],

            'photo' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],

            'occupation' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s.]+$/'
            ],

            'qualification' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s.,()\-]+$/'
            ],

            'experiance' => [
                'required',
                'string',
                'max:255'
            ],

            'bio' => [
                'nullable',
                'string'
            ],

        ], [

            'department_id.required' =>
                'Please select a department.',

            'name.regex' =>
                'Name must contain letters only. Numbers are not allowed.',

            'occupation.regex' =>
                'Occupation must contain letters only. Numbers are not allowed.',

            'qualification.regex' =>
                'Qualification must not contain numbers.',

            'photo.mimes' =>
                'Photo must be JPG, JPEG, PNG or WEBP.',

            'photo.max' =>
                'Photo size must not exceed 2 MB.',
        ]);


        // ============================================
        // PHOTO UPLOAD
        // ============================================

        $photoPath = 'uploads/faculties/1786693792_pngtree-user-vector-avatar-png-image_1541962.jpg';

        if ($request->hasFile('photo')) {

            $file = $request->file('photo');

            $folder = public_path(
                'uploads/faculties'
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
                'uploads/faculties/' .
                $filename;
        }


        // ============================================
        // INSERT FACULTY
        // ============================================

        DB::table('faculties')->insert([

            'department_id' =>
                $request->department_id,

            'name' =>
                $request->name,

            'photo' =>
                $photoPath,

            'occupation' =>
                $request->occupation,

            'qualification' =>
                $request->qualification,

            'experiance' =>
                $request->experiance,

            'bio' =>
                $request->bio,

            'created_at' =>
                now(),

            'updated_at' =>
                now(),

        ]);


        return redirect()
            ->route('faculties')
            ->with(
                'success',
                'Faculty added successfully.'
            );
    }


    // ============================================
    // UPDATE FACULTY
    // ============================================

    public function update(Request $request)
    {
        $request->validate([

            'id' => [
                'required',
                'integer'
            ],

            'department_id' => [
                'required',
                'integer'
            ],

            'name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s.]+$/'
            ],

            'photo' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],

            'occupation' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s.]+$/'
            ],

            'qualification' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s.,()\-]+$/'
            ],

            'experiance' => [
                'required',
                'string',
                'max:255'
            ],

            'bio' => [
                'nullable',
                'string'
            ],

        ], [

            'department_id.required' =>
                'Please select a department.',

            'name.regex' =>
                'Name must contain letters only. Numbers are not allowed.',

            'occupation.regex' =>
                'Occupation must contain letters only. Numbers are not allowed.',

            'qualification.regex' =>
                'Qualification must not contain numbers.',

            'photo.mimes' =>
                'Photo must be JPG, JPEG, PNG or WEBP.',

            'photo.max' =>
                'Photo size must not exceed 2 MB.',
        ]);


        // ============================================
        // GET EXISTING FACULTY
        // ============================================

        $faculty = DB::table('faculties')
            ->where('id', $request->id)
            ->first();


        if (!$faculty) {

            return redirect()
                ->route('faculties')
                ->with(
                    'error',
                    'Faculty record not found.'
                );
        }


        // Keep old photo
        $photoPath = $faculty->photo;


        // ============================================
        // REPLACE PHOTO
        // ============================================

        if ($request->hasFile('photo')) {

            $file = $request->file('photo');

            $folder = public_path(
                'uploads/faculties'
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
                'uploads/faculties/' .
                $filename;
        }


        // ============================================
        // UPDATE DATABASE
        // ============================================

        DB::table('faculties')
            ->where('id', $request->id)
            ->update([

                'department_id' =>
                    $request->department_id,

                'name' =>
                    $request->name,

                'photo' =>
                    $photoPath,

                'occupation' =>
                    $request->occupation,

                'qualification' =>
                    $request->qualification,

                'experiance' =>
                    $request->experiance,

                'bio' =>
                    $request->bio,

                'updated_at' =>
                    now(),

            ]);


        return redirect()
            ->route('faculties')
            ->with(
                'success',
                'Faculty updated successfully.'
            );
    }


    // ============================================
    // DELETE FACULTY
    // ============================================

    public function delete(Request $request)
    {
        $request->validate([

            'id' => [
                'required',
                'integer'
            ]

        ]);


        // Get faculty
        $faculty = DB::table('faculties')
            ->where('id', $request->id)
            ->first();


        if (!$faculty) {

            return redirect()
                ->route('faculties')
                ->with(
                    'error',
                    'Faculty record not found.'
                );
        }


        // ============================================
        // DELETE PHOTO FILE
        // ============================================

        if (!empty($faculty->photo)) {

            $photoPath =
                public_path($faculty->photo);


            if (File::exists($photoPath)) {

                File::delete($photoPath);
            }
        }


        // ============================================
        // DELETE DATABASE RECORD
        // ============================================

        DB::table('faculties')
            ->where('id', $request->id)
            ->delete();


        return redirect()
            ->route('faculties')
            ->with(
                'success',
                'Faculty deleted successfully.'
            );
    }
}