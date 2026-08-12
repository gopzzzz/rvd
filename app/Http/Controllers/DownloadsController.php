<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DownloadsController extends Controller
{
    public function index()
    {
        $downloads = DB::table('downloads')->get();

        return view('downloads', compact('downloads'));
    }


    // =========================
    // SAVE NEW RECORD
    // =========================
    public function store(Request $request)
    {
        $request->validate([

            'documentname' => [
                'required',
                'string',
                'max:255',
                'regex:/[a-zA-Z]/'
            ],

            'documents' => [
                'required',
                'file',
                'mimes:pdf,doc,docx,jpg,jpeg,png',
                'max:5120'
            ],

        ], [

            'documentname.regex' =>
                'Document Name cannot contain only numbers. Please include letters.',

            'documents.mimes' =>
                'Document must be PDF, DOC, DOCX, JPG, JPEG or PNG.',

            'documents.max' =>
                'Document size must not exceed 5 MB.',

        ]);


        $file = $request->file('documents');

        $filename = time() . '_' . $file->getClientOriginalName();


        $file->move(
            public_path('uploads/documents'),
            $filename
        );


        $documentPath = 'uploads/documents/' . $filename;


        DB::table('downloads')->insert([

            'documentname' => $request->documentname,

            'documents' => $documentPath,

            'created_at' => now(),

            'updated_at' => now(),

        ]);


        return redirect()
            ->route('downloads')
            ->with(
                'success',
                'Download saved successfully.'
            );
    }


    // =========================
    // UPDATE RECORD
    // =========================
    public function update(Request $request)
    {
        $request->validate([

            'id' => [
                'required'
            ],

            'documentname' => [
                'required',
                'string',
                'max:255',
                'regex:/[a-zA-Z]/'
            ],

            'documents' => [
                'nullable',
                'file',
                'mimes:pdf,doc,docx,jpg,jpeg,png',
                'max:5120'
            ],

        ], [

            'documentname.regex' =>
                'Document Name cannot contain only numbers. Please include letters.',

            'documents.mimes' =>
                'Document must be PDF, DOC, DOCX, JPG, JPEG or PNG.',

            'documents.max' =>
                'Document size must not exceed 5 MB.',

        ]);


        // Keep existing document
        $documentPath = $request->current_document;


        // If user uploads a new document
        if ($request->hasFile('documents')) {

            $file = $request->file('documents');

            $filename = time() . '_' . $file->getClientOriginalName();


            $file->move(
                public_path('uploads/documents'),
                $filename
            );


            $documentPath = 'uploads/documents/' . $filename;
        }


        DB::table('downloads')
            ->where('id', $request->id)
            ->update([

                'documentname' => $request->documentname,

                'documents' => $documentPath,

                'updated_at' => now(),

            ]);


        return redirect()
            ->route('downloads')
            ->with(
                'success',
                'Download updated successfully.'
            );
    }
}