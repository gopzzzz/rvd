<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = DB::table('department')->get();
        return view('department', compact('department'));
    }

   public function store(Request $request)
{
    $request->validate([
        'name' => [
            'required',
            'string',
            'max:100',
            'regex:/^[A-Za-z ]+$/',
        ],
    ], [
        'name.required' => 'Name is required.',
        'name.regex' => 'Name can contain only letters.',
    ]);

        DB::table('department')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('department.index')->with('success', 'Department added successfully');
    }

    public function edit($id)
{
    $department = DB::table('department')
                    ->where('id', $id)
                    ->first();

    return response()->json($department);
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        DB::table('department')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'updated_at' => now(),
            ]);

        return redirect()->route('department.index')->with('success', 'Department updated successfully');
    }

}