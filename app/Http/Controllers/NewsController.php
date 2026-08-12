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


    // ============================
    // STORE NEW RECORD
    // ============================

    public function store(Request $request)
    {
        $request->validate([

            'type' => [
                'required',
                'string',
                'in:news,events'
            ],

            'photo' => [
                'required',
                'image',
                'mimes:jpeg,jpg,png,gif',
                'max:5120'
            ],

            // Title: letters + numbers + spaces
          'title' => [
    'required',
    'string',
    'max:255',
    'regex:/[a-zA-Z]/'
],

            // Description: letters + numbers + symbols allowed,
            // but must contain at least one letter
            'description' => [
                'required',
                'string',
                'regex:/[a-zA-Z]/'
            ],

            'date' => [
                'required',
                'date'
            ],

        ], [

            'type.in' =>
                'Type must be either News or Events.',

            'title.regex' =>
    'Title must contain at least one letter. Numbers and symbols are allowed.',

            'description.regex' =>
                'Description cannot contain only numbers or symbols. Please include letters.',

            'date.date' =>
                'Please enter a valid date.',

            'photo.mimes' =>
                'Photo must be JPEG, JPG, PNG or GIF.',

            'photo.max' =>
                'Photo size must not exceed 5 MB.',

        ]);


        $file = $request->file('photo');

        $filename =
            time() . '_' . $file->getClientOriginalName();


        $file->move(
            public_path('uploads/news'),
            $filename
        );


        $photoPath =
            'uploads/news/' . $filename;


        DB::table('news')->insert([

            'type' => $request->type,

            'photo' => $photoPath,

            'title' => $request->title,

            'description' => $request->description,

            'date' => $request->date,

            'created_at' => now(),

            'updated_at' => now(),

        ]);


        return redirect()
            ->route('news')
            ->with(
                'success',
                'News added successfully.'
            );
    }


    // ============================
    // UPDATE RECORD
    // ============================

    public function update(Request $request)
    {
        $request->validate([

            'id' => [
                'required',
                'integer'
            ],

            'type' => [
                'required',
                'string',
                'in:news,events'
            ],

           'title' => [
    'required',
    'string',
    'max:255',
    'regex:/[a-zA-Z]/'
],
            'description' => [
                'required',
                'string',
                'regex:/[a-zA-Z]/'
            ],

           'date' => [
    'required',
    'date',
    'date_format:Y-m-d',
    'after_or_equal:1000-01-01',
    'before_or_equal:9999-12-31',
],

            'photo' => [
                'nullable',
                'image',
                'mimes:jpeg,jpg,png,gif',
                'max:5120'
            ],

        ], [

            'type.in' =>
                'Type must be either News or Events.',

            'title.regex' =>
                'Title can contain letters and numbers only. Symbols are not allowed.',

            'description.regex' =>
                'Description cannot contain only numbers or symbols. Please include letters.',

            'date.date' =>
                'Please enter a valid date.',

            'photo.mimes' =>
                'Photo must be JPEG, JPG, PNG or GIF.',

            'photo.max' =>
                'Photo size must not exceed 5 MB.',

        ]);


        $data = [

            'type' => $request->type,

            'title' => $request->title,

            'description' => $request->description,

            'date' => $request->date,

            'updated_at' => now(),

        ];


        // Replace photo only if new photo is selected
        if ($request->hasFile('photo')) {

            $file = $request->file('photo');

            $filename =
                time() . '_' . $file->getClientOriginalName();


            $file->move(
                public_path('uploads/news'),
                $filename
            );


            $data['photo'] =
                'uploads/news/' . $filename;
        }


        DB::table('news')
            ->where('id', $request->id)
            ->update($data);


        return redirect()
            ->route('news')
            ->with(
                'success',
                'News updated successfully.'
            );
    }
}