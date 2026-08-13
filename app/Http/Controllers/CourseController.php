<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    // Display Courses
    public function index()
    {
        $courses = DB::table('courses')->get();

        return view('course', compact('courses'));
    }


    // Store New Course
    public function store(Request $request)
    {
        $request->validate([

            'coursename' => [
                'required',
                'string',
                'max:100',
                'regex:/^[A-Za-z ]+$/',
            ],

            'coursefullname' => [
                'required',
                'string',
                'max:100',
                'regex:/^[A-Za-z ]+$/',
            ],
              'overview' => [
                'required',
                'string',
                'max:100',
                'regex:/^[A-Za-z ]+$/',
            ],

            'eligibility' => [
                'required',
                'string',
                'max:100',
                'regex:/^[A-Za-z ]+$/',
            ],

            'duration' => [
                'required',
                'integer',
            ],

            'CoreObjectives' => [
                'required',
                'string',
                'max:100',
                'regex:/^[A-Za-z ]+$/',
            ],

            'Highlights' => [
                'required',
                'string',
                'max:100',
                'regex:/^[A-Za-z ]+$/',
            ],

            'intake' => [
                'required',
                'integer',
            ],

            'fees' => [
                'required',
                'integer',
            ],

        ], [

            'coursename.required' => 'Course name is required.',
            'coursename.regex' => 'Course name can contain only letters and spaces.',
            'coursename.max' => 'Course name cannot exceed 100 characters.',

            'coursefullname.required' => 'Course full name is required.',
            'coursefullname.regex' => 'Course full name can contain only letters and spaces.',
            'coursefullname.max' => 'Course full name cannot exceed 100 characters.',

            'eligibility.required' => 'Eligibility is required.',
            'eligibility.regex' => 'Eligibility can contain only letters and spaces.',
            'eligibility.max' => 'Eligibility cannot exceed 100 characters.',

            'duration.required' => 'Duration is required.',
            'duration.integer' => 'Duration must contain numbers only.',

            'CoreObjectives.required' => 'Core objectives is required.',
            'CoreObjectives.regex' => 'Core objectives can contain only letters and spaces.',
            'CoreObjectives.max' => 'Core objectives cannot exceed 100 characters.',

            'Highlights.required' => 'Highlights is required.',
            'Highlights.regex' => 'Highlights can contain only letters and spaces.',
            'Highlights.max' => 'Highlights cannot exceed 100 characters.',

            'intake.required' => 'Intake is required.',
            'intake.integer' => 'Intake must contain numbers only.',

            'fees.required' => 'Fees is required.',
            'fees.integer' => 'Fees must contain numbers only.',
        ]);


        // Insert Course
        DB::table('courses')->insert([

            'coursename' => $request->coursename,

            'overview' => $request->overview,

             'fullname' => $request->coursefullname,

            'eligibility' => $request->eligibility,

            'duration' => $request->duration,

            'Curriculum' => $request->CoreObjectives,

            'Certifications' => $request->Highlights,

            'values' => $request->intake,

            'fees' => $request->fees,

            'created_at' => now(),

            'updated_at' => now(),
        ]);


        return redirect()
            ->route('course.index')
            ->with('success', 'Course added successfully');
    }


    // Edit Course
    public function edit($id)
    {
        $course = DB::table('courses')
            ->where('id', $id)
            ->first();

        return response()->json($course);
    }


    // Update Course
    public function update(Request $request, $id)
    {
        $request->validate([

            'coursename' => [
                'required',
                'string',
                'max:100',
                'regex:/^[A-Za-z ]+$/',
            ],

            'coursefullname' => [
                'required',
                'string',
                'max:100',
                'regex:/^[A-Za-z ]+$/',
            ],

            'eligibility' => [
                'required',
                'string',
                'max:100',
                'regex:/^[A-Za-z ]+$/',
            ],

            'duration' => [
                'required',
                'integer',
            ],

            'CoreObjectives' => [
                'required',
                'string',
                'max:100',
                'regex:/^[A-Za-z ]+$/',
            ],

            'Highlights' => [
                'required',
                'string',
                'max:100',
                'regex:/^[A-Za-z ]+$/',
            ],

            'intake' => [
                'required',
                'integer',
            ],

            'fees' => [
                'required',
                'integer',
            ],

        ], [

            'coursename.required' => 'Course name is required.',
            'coursename.regex' => 'Course name can contain only letters and spaces.',
            'coursename.max' => 'Course name cannot exceed 100 characters.',

            'coursefullname.required' => 'Course full name is required.',
            'coursefullname.regex' => 'Course full name can contain only letters and spaces.',
            'coursefullname.max' => 'Course full name cannot exceed 100 characters.',

            'eligibility.required' => 'Eligibility is required.',
            'eligibility.regex' => 'Eligibility can contain only letters and spaces.',
            'eligibility.max' => 'Eligibility cannot exceed 500 characters.',

            'duration.required' => 'Duration is required.',
            'duration.integer' => 'Duration must contain numbers only.',

            'CoreObjectives.required' => 'Core objectives is required.',
            'CoreObjectives.regex' => 'Core objectives can contain only letters and spaces.',
            'CoreObjectives.max' => 'Core objectives cannot exceed 100 characters.',

            'Highlights.required' => 'Highlights is required.',
            'Highlights.regex' => 'Highlights can contain only letters and spaces.',
            'Highlights.max' => 'Highlights cannot exceed 100 characters.',

            'intake.required' => 'Intake is required.',
            'intake.integer' => 'Intake must contain numbers only.',

            'fees.required' => 'Fees is required.',
            'fees.integer' => 'Fees must contain numbers only.',
        ]);


        // Update Course
        DB::table('courses')
            ->where('id', $id)
            ->update([

                'coursename' => $request->coursename,

                'fullname' => $request->coursefullname,

                 'overview' => $request->overview,

                'eligibility' => $request->eligibility,

                'duration' => $request->duration,

                'Curriculum' => $request->CoreObjectives,

                'Certifications' => $request->Highlights,

                'values' => $request->intake,

                'fees' => $request->fees,

                'updated_at' => now(),
            ]);


        return redirect()
            ->route('course.index')
            ->with('success', 'Course updated successfully');
    }
}