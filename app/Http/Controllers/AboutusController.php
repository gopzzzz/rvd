<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutusController extends Controller
{
    public function index()
    {
        $aboutus = DB::table('aboutus')->get();

        return view('aboutus', compact('aboutus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'about' => 'required|string',
            'vision' => 'required|string',
            'mission' => 'required|string',
            'principalmsg' => 'required|string',
            'directormsg' => 'required|string',
            'accrediation' => 'required|string',
            'infrastructure' => 'required|string',
            'campusvideo' => 'nullable|string|max:255',
        ]);

        DB::table('aboutus')->insert([
            'about' => $request->about,
            'vision' => $request->vision,
            'mission' => $request->mission,
            'principalmsg' => $request->principalmsg,
            'directormsg' => $request->directormsg,
            'accrediation' => $request->accrediation,
            'infrastructure' => $request->infrastructure,
            'campusvideo' => $request->campusvideo,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('aboutus')
            ->with('success', 'About Us saved successfully.');
    }

    
}