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
        $aboutus = DB::table('aboutus')->first();

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

    public function update(Request $request)
{
     $id=$request->keyid;
    DB::table('aboutus')
        ->where('id', $id)
        ->update([
            'about'          => $request->about,
            'vision'         => $request->vision,
            'mission'        => $request->mission,
            'principalmsg'   => $request->principalmsg,
            'directormsg'   => $request->principalmsg,
            'principal_name'   => $request->principal_name,
            'direct_name'    => $request->direct_name,
            'accrediation'   => $request->accrediation,
            'infrastructure' => $request->infrastructure,
            'campusvideo'    => $request->campusvideo,
            'updated_at'     => now(),
        ]);

    return redirect()->back()->with('success', 'About Us updated successfully.');
}

    
}