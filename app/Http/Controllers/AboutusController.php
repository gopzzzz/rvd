<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AboutusController extends Controller
{
    // ============================================
    // SHOW ABOUT US PAGE
    // ============================================

    public function index()
    {
        $aboutus = DB::table('aboutus')->get();

        return view('aboutus', compact('aboutus'));
    }


    // ============================================
    // STORE NEW RECORD
    // ============================================

    public function store(Request $request)
    {
        // Validation
        $request->validate([

            'about' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'vision' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'mission' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'principalmsg' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'directormsg' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'accrediation' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'infrastructure' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            // Campus Video
            'campusvideo' => [
                'nullable',
                'file',
                'mimes:mp4,mov,avi,wmv,mkv',
                'max:51200'
            ],

        ], [

            'about.regex' =>
                'About Us must not contain numbers.',

            'vision.regex' =>
                'Vision must not contain numbers.',

            'mission.regex' =>
                'Mission must not contain numbers.',

            'principalmsg.regex' =>
                'Principal Message must not contain numbers.',

            'directormsg.regex' =>
                'Director Message must not contain numbers.',

            'accrediation.regex' =>
                'Accrediation must not contain numbers.',

            'infrastructure.regex' =>
                'Infrastructure must not contain numbers.',

            'campusvideo.mimes' =>
                'Campus Video must be an MP4, MOV, AVI, WMV or MKV video.',

            'campusvideo.max' =>
                'Campus Video must not be larger than 50 MB.',

        ]);


        // ============================================
        // VIDEO UPLOAD
        // ============================================

        $videoPath = null;

        if ($request->hasFile('campusvideo')) {

            $file = $request->file('campusvideo');


            // Create folder if it doesn't exist
            $destinationPath = public_path('uploads/campusvideos');

            if (!File::exists($destinationPath)) {

                File::makeDirectory(
                    $destinationPath,
                    0755,
                    true
                );
            }


            // Generate unique filename
            $filename =
                time() . '_' .
                $file->getClientOriginalName();


            // Move video
            $file->move(
                $destinationPath,
                $filename
            );


            // Save path in database
            $videoPath =
                'uploads/campusvideos/' . $filename;
        }


        // ============================================
        // INSERT INTO DATABASE
        // ============================================

        DB::table('aboutus')->insert([

            'about' =>
                $request->about,

            'vision' =>
                $request->vision,

            'mission' =>
                $request->mission,

            'principalmsg' =>
                $request->principalmsg,

            'directormsg' =>
                $request->directormsg,

            'accrediation' =>
                $request->accrediation,

            'infrastructure' =>
                $request->infrastructure,

            'campusvideo' =>
                $videoPath,

            'created_at' =>
                now(),

            'updated_at' =>
                now(),

        ]);


        return redirect()
            ->route('aboutus')
            ->with(
                'success',
                'About Us saved successfully.'
            );
    }


    // ============================================
    // UPDATE EXISTING RECORD
    // ============================================

    public function update(Request $request)
    {
        // Validation
        $request->validate([

            'id' => [
                'required',
                'integer'
            ],

            'about' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'vision' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'mission' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'principalmsg' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'directormsg' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'accrediation' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            'infrastructure' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s.,\'"()\-]+$/'
            ],

            // Video is optional while editing
            'campusvideo' => [
                'nullable',
                'file',
                'mimes:mp4,mov,avi,wmv,mkv',
                'max:51200'
            ],

        ], [

            'about.regex' =>
                'About Us must not contain numbers.',

            'vision.regex' =>
                'Vision must not contain numbers.',

            'mission.regex' =>
                'Mission must not contain numbers.',

            'principalmsg.regex' =>
                'Principal Message must not contain numbers.',

            'directormsg.regex' =>
                'Director Message must not contain numbers.',

            'accrediation.regex' =>
                'Accrediation must not contain numbers.',

            'infrastructure.regex' =>
                'Infrastructure must not contain numbers.',

            'campusvideo.mimes' =>
                'Campus Video must be an MP4, MOV, AVI, WMV or MKV video.',

            'campusvideo.max' =>
                'Campus Video must not be larger than 50 MB.',

        ]);


        // ============================================
        // GET EXISTING RECORD
        // ============================================

        $aboutus = DB::table('aboutus')
            ->where('id', $request->id)
            ->first();


        if (!$aboutus) {

            return redirect()
                ->route('aboutus')
                ->with(
                    'error',
                    'Record not found.'
                );
        }


        // Keep existing video
        $videoPath = $aboutus->campusvideo;


        // ============================================
        // CHECK FOR NEW VIDEO
        // ============================================

        if ($request->hasFile('campusvideo')) {

            $file = $request->file('campusvideo');


            $destinationPath =
                public_path('uploads/campusvideos');


            // Create directory if missing
            if (!File::exists($destinationPath)) {

                File::makeDirectory(
                    $destinationPath,
                    0755,
                    true
                );
            }


            // Create filename
            $filename =
                time() . '_' .
                $file->getClientOriginalName();


            // Move new video
            $file->move(
                $destinationPath,
                $filename
            );


            // Delete old video
            if (!empty($aboutus->campusvideo)) {

                $oldVideo =
                    public_path(
                        $aboutus->campusvideo
                    );


                if (File::exists($oldVideo)) {

                    File::delete($oldVideo);
                }
            }


            // New video path
            $videoPath =
                'uploads/campusvideos/' . $filename;
        }


        // ============================================
        // UPDATE DATABASE
        // ============================================

        DB::table('aboutus')
            ->where('id', $request->id)
            ->update([

                'about' =>
                    $request->about,

                'vision' =>
                    $request->vision,

                'mission' =>
                    $request->mission,

                'principalmsg' =>
                    $request->principalmsg,

                'directormsg' =>
                    $request->directormsg,

                'accrediation' =>
                    $request->accrediation,

                'infrastructure' =>
                    $request->infrastructure,

                'campusvideo' =>
                    $videoPath,

                'updated_at' =>
                    now(),

            ]);


        return redirect()
            ->route('aboutus')
            ->with(
                'success',
                'About Us updated successfully.'
            );
    }
}