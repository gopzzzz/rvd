<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UploadsController extends Controller
{
    // ==========================================
    // SHOW UPLOADS
    // ==========================================

    public function index()
    {
        $uploads = DB::table('uploads')
            ->leftJoin(
                'gallerytypes',
                'gallerytypes.id',
                '=',
                'uploads.type_id'
            )
            ->select(
                'uploads.*',
                'gallerytypes.type_name'
            )
            ->get();

        $types = DB::table('gallerytypes')->get();

        return view(
            'uploads',
            compact('uploads', 'types')
        );
    }


    // ==========================================
    // ADD PHOTOS
    // ==========================================

    public function store(Request $request)
    {
        $request->validate([

            'type' => [
                'required'
            ],

            'photo' => [
                'required'
            ],

            'photo.*' => [
                'image',
                'mimes:jpg,jpeg,png,gif',
                'max:5120'
            ],

            'status' => [
                'required',
                'string',
                'max:20'
            ],

        ]);


        if ($request->hasFile('photo')) {

            $type = $request->type;


            foreach ($request->file('photo') as $file) {

                $filename =
                    time() .
                    '_' .
                    uniqid() .
                    '_' .
                    $file->getClientOriginalName();


                $file->move(
                    public_path('uploads/photos'),
                    $filename
                );


                $photoPath =
                    'uploads/photos/' . $filename;


                DB::table('uploads')->insert([

                    'type_id' =>
                        $type,

                    'photo' =>
                        $photoPath,

                    'status' =>
                        $request->status,

                    'created_at' =>
                        now(),

                    'updated_at' =>
                        now(),

                ]);
            }
        }


        return redirect()
            ->route('uploads')
            ->with(
                'success',
                'Photos uploaded successfully.'
            );
    }


    // ==========================================
    // DELETE PHOTO
    // ==========================================

    public function delete(Request $request)
    {
        $request->validate([

            'id' => [
                'required',
                'integer'
            ],

        ]);


        // Find upload
        $upload = DB::table('uploads')
            ->where('id', $request->id)
            ->first();


        if (!$upload) {

            return redirect()
                ->route('uploads')
                ->with(
                    'error',
                    'Upload not found.'
                );
        }


        // Delete image from uploads/photos folder
        if (!empty($upload->photo)) {

            $photoPath =
                public_path($upload->photo);


            if (File::exists($photoPath)) {

                File::delete($photoPath);
            }
        }


        // Delete database row
        DB::table('uploads')
            ->where('id', $request->id)
            ->delete();


        return redirect()
            ->route('uploads')
            ->with(
                'success',
                'Upload deleted successfully.'
            );
    }
}