<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryTypeController extends Controller
{
    // ============================================
    // SHOW GALLERY TYPES
    // ============================================

    public function index()
    {
        $gallerytypes = DB::table('gallerytypes')->get();

        return view(
            'gallerytypes',
            compact('gallerytypes')
        );
    }


    // ============================================
    // STORE NEW TYPE
    // ============================================

    public function store(Request $request)
    {
        $request->validate([

            'type_name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s]+$/'
            ],

        ], [

            'type_name.required' =>
                'Gallery Type is required.',

            'type_name.regex' =>
                'Gallery Type must contain letters only. Numbers are not allowed.',

        ]);


        DB::table('gallerytypes')->insert([

            'type_name' =>
                $request->type_name,

            'created_at' =>
                now(),

            'updated_at' =>
                now(),

        ]);


        return redirect()
            ->route('gallerytypes')
            ->with(
                'success',
                'Gallery Type added successfully.'
            );
    }


    // ============================================
    // UPDATE TYPE
    // ============================================

    public function update(Request $request)
    {
        $request->validate([

            'id' => [
                'required',
                'integer'
            ],

            'type_name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s]+$/'
            ],

        ], [

            'type_name.required' =>
                'Gallery Type is required.',

            'type_name.regex' =>
                'Gallery Type must contain letters only. Numbers are not allowed.',

        ]);


        DB::table('gallerytypes')
            ->where('id', $request->id)
            ->update([

                'type_name' =>
                    $request->type_name,

                'updated_at' =>
                    now(),

            ]);


        return redirect()
            ->route('gallerytypes')
            ->with(
                'success',
                'Gallery Type updated successfully.'
            );
    }
}