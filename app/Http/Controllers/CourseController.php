<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->get();
        return view('course', compact('courses'));
    }

    public function store(Request $request)
{
    $request->validate([
        'coursename' => 'required',
        'overview' => 'required',
        'eligibility' => 'required',
        'duration' => 'required',
        'Curriculum' => 'required',
        'Opportunities' => 'required',
        'Certifications' => 'required',
        'values' => 'required',
        'placementsupport' => 'required',
        'fees' => 'required',
    ]);

    DB::table('courses')->insert([
        'coursename' => $request->coursename,
        'overview' => $request->overview,
        'eligibility' => $request->eligibility,
        'duration' => $request->duration,
        'Curriculum' => $request->Curriculum,
        'Opportunities' => $request->Opportunities,
        'Certifications' => $request->Certifications,
        'values' => $request->values,
        'placementsupport' => $request->placementsupport,
        'fees' => $request->fees,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->route('course.index')->with('success', 'Course added successfully');
}
}