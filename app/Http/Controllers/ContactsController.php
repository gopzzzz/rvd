<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ContactsController extends Controller
{
    // Show Contacts page
    public function index()
    {
        $contacts = DB::table('contacts')->first();

        return view('contacts', compact('contacts'));
    }


    // Save New Contact
    public function store(Request $request)
    {
        $request->validate([

            'smallcaption' => [
                'required',
                'string',
                'max:255'
            ],

            'broacher' => [
                'nullable',
                'file',
                'mimes:pdf,doc,docx',
                'max:5120'
            ],

            'logo' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],

            'phonenumber' => [
                'nullable',
                'regex:/^\+?[0-9]{10,15}$/'
            ],

            'mail' => [
                'nullable',
                'email',
                'max:255'
            ],

            // OPEN TIME
            'open' => [
                'required',
                'date_format:H:i'
            ],

            // CLOSE TIME
            'close' => [
                'required',
                'date_format:H:i'
            ],

            'facebooklink' => [
                'nullable',
                'url',
                'max:255'
            ],

            'instagramlink' => [
                'nullable',
                'url',
                'max:255'
            ],

            'youtubelink' => [
                'nullable',
                'url',
                'max:255'
            ],

            'linkedinlink' => [
                'nullable',
                'url',
                'max:255'
            ],

            'whatsappnumber' => [
                'nullable',
                'regex:/^\+?[0-9]{10,15}$/'
            ],

            'address' => [
                'nullable',
                'string',
                'max:1000'
            ],

            'maplink' => [
                'nullable',
                'url',
                'max:255'
            ],

        ], [

            'phonenumber.regex' =>
                'Phone Number must contain 10 to 15 digits.',

            'whatsappnumber.regex' =>
                'WhatsApp Number must contain 10 to 15 digits.',

            'mail.email' =>
                'Please enter a valid email address.',

            'open.required' =>
                'Open Time is required.',

            'open.date_format' =>
                'Open Time must be a valid time.',

            'close.required' =>
                'Close Time is required.',

            'close.date_format' =>
                'Close Time must be a valid time.',

            'facebooklink.url' =>
                'Please enter a valid Facebook URL.',

            'instagramlink.url' =>
                'Please enter a valid Instagram URL.',

            'youtubelink.url' =>
                'Please enter a valid YouTube URL.',

            'linkedinlink.url' =>
                'Please enter a valid LinkedIn URL.',

            'maplink.url' =>
                'Please enter a valid Map URL.',

            'broacher.mimes' =>
                'Broacher must be PDF, DOC or DOCX.',

            'broacher.max' =>
                'Broacher size must not exceed 5 MB.',

            'logo.mimes' =>
                'Logo must be JPG, JPEG, PNG or WEBP.',

            'logo.max' =>
                'Logo size must not exceed 2 MB.',
        ]);


        // ==============================
        // BROACHER UPLOAD
        // ==============================

        $broacherPath = null;

        if ($request->hasFile('broacher')) {

            $file = $request->file('broacher');

            $folder = public_path(
                'uploads/contacts/broachers'
            );

            if (!File::exists($folder)) {

                File::makeDirectory(
                    $folder,
                    0755,
                    true
                );
            }

            $filename =
                time() .
                '_broacher_' .
                $file->getClientOriginalName();

            $file->move(
                $folder,
                $filename
            );

            $broacherPath =
                'uploads/contacts/broachers/' .
                $filename;
        }


        // ==============================
        // LOGO UPLOAD
        // ==============================

        $logoPath = null;

        if ($request->hasFile('logo')) {

            $file = $request->file('logo');

            $folder = public_path(
                'uploads/contacts/logos'
            );

            if (!File::exists($folder)) {

                File::makeDirectory(
                    $folder,
                    0755,
                    true
                );
            }

            $filename =
                time() .
                '_logo_' .
                $file->getClientOriginalName();

            $file->move(
                $folder,
                $filename
            );

            $logoPath =
                'uploads/contacts/logos/' .
                $filename;
        }


        // ==============================
        // SAVE DATABASE
        // ==============================

        DB::table('contacts')->insert([

            'smallcaption' =>
                $request->smallcaption,

            'broacher' =>
                $broacherPath,

            'logo' =>
                $logoPath,

            'phonenumber' =>
                $request->phonenumber,

            'mail' =>
                $request->mail,

            'open' =>
                $request->open,

            'close' =>
                $request->close,

            'facebooklink' =>
                $request->facebooklink,

            'instagramlink' =>
                $request->instagramlink,

            'youtubelink' =>
                $request->youtubelink,

            'linkedinlink' =>
                $request->linkedinlink,

            'whatsappnumber' =>
                $request->whatsappnumber,

            'address' =>
                $request->address,

            'maplink' =>
                $request->maplink,

            'created_at' =>
                now(),

            'updated_at' =>
                now(),
        ]);


        return redirect()
            ->route('contacts')
            ->with(
                'success',
                'Contact added successfully.'
            );
    }
public function updatecontacts(Request $request)
{
    $id=$request->keyid;

    $data = [
        'smallcaption' => $request->smallcaption,
        'phonenumber' => $request->phonenumber,
        'mail' => $request->mail,
        'open' => $request->open,
        'close' => $request->close,
        'facebooklink' => $request->facebooklink,
        'instagramlink' => $request->instagramlink,
        'youtubelink' => $request->youtubelink,
        'linkedinlink' => $request->linkedinlink,
        'whatsappnumber' => $request->whatsappnumber,
        'address' => $request->address,
        'maplink' => $request->maplink,
        'updated_at' => now(),
    ];

    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $logoName = time() . '_' . $logo->getClientOriginalName();
        $logoPath = 'uploads/contacts/logos/' . $logoName;
        $logo->move(public_path('uploads/contacts/logos/'), $logoName);

        $data['logo'] = $logoPath;
    }

    if ($request->hasFile('broacher')) {
        $broacher = $request->file('broacher');
        $broacherName = time() . '_' . $broacher->getClientOriginalName();
        $broPath = 'uploads/contacts/logos/' . $broacherName;
        $broacher->move(public_path('uploads/contacts/logos/'), $broacherName);

        $data['broacher'] = $broPath;
    }

    DB::table('contacts')
        ->where('id', $id)
        ->update($data);

    return redirect()->back()->with(
        'success',
        'Contact updated successfully.'
    );
}

}