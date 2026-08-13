<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SemesterDetailsController extends Controller
{
    // Show semesters for selected course
    public function index($course_id)
    {
        $course = DB::table('courses')
            ->where('id', $course_id)
            ->first();

        if (!$course) {
            return redirect()
                ->route('course.index')
                ->with('error', 'Course not found.');
        }

        $semesters = DB::table('semester_details')
            ->where('course_id', $course_id)
            ->orderBy('id', 'asc')
            ->get();

        return view('semester_details', compact(
            'course',
            'semesters'
        ));
    }


    // Store semester
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|integer',
            'semester' => 'required|string|max:100',
            'subjects' => 'required|string',
        ], [
            'course_id.required' => 'Course is required.',
            'semester.required' => 'Semester is required.',
            'subjects.required' => 'Subjects are required.',
        ]);

        DB::table('semester_details')->insert([
            'course_id' => $request->course_id,
            'semester' => $request->semester,
            'subjects' => $request->subjects,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('semester.index', $request->course_id)
            ->with('success', 'Semester added successfully.');
    }


    // Get semester for editing
    public function edit($id)
    {
        $semester = DB::table('semester_details')
            ->where('id', $id)
            ->first();

        if (!$semester) {
            return response()->json([
                'error' => 'Semester not found.'
            ], 404);
        }

        return response()->json($semester);
    }


    // Update semester
    public function update(Request $request, $id)
    {
        $request->validate([
            'semester' => 'required|string|max:100',
            'subjects' => 'required|string',
        ], [
            'semester.required' => 'Semester is required.',
            'subjects.required' => 'Subjects are required.',
        ]);

        $semester = DB::table('semester_details')
            ->where('id', $id)
            ->first();

        if (!$semester) {
            return redirect()
                ->back()
                ->with('error', 'Semester not found.');
        }

        DB::table('semester_details')
            ->where('id', $id)
            ->update([
                'semester' => $request->semester,
                'subjects' => $request->subjects,
                'updated_at' => now(),
            ]);

        return redirect()
            ->route('semester.index', $semester->course_id)
            ->with('success', 'Semester updated successfully.');
    }


    // Delete semester
    public function destroy($id)
    {
        $semester = DB::table('semester_details')
            ->where('id', $id)
            ->first();

        if (!$semester) {
            return redirect()
                ->back()
                ->with('error', 'Semester not found.');
        }

        $course_id = $semester->course_id;

        DB::table('semester_details')
            ->where('id', $id)
            ->delete();

        return redirect()
            ->route('semester.index', $course_id)
            ->with('success', 'Semester deleted successfully.');
    }
}