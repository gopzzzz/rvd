<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdmissionController extends Controller
{
    // Display Admission
    public function index()
    {
        $admission = DB::table('admission')->get();

        return view('admission', compact('admission'));
    }

    // Store New Admission
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'adharcard' => 'required|string',
            'email' => 'required|email',
            'phonenumber' => 'required|string',
            'tenthpercentage' => 'required|numeric',
            'higherschoolname' => 'required|string',
            'higherpercentage' => 'required|numeric',
            'higherdepartment' => 'required|string',
            'program' => 'required|string',
            'hearabout' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'pincode' => 'required|string',
        ]);

        DB::table('admission')->insert([
            'name' => $request->name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'adharcard' => $request->adharcard,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'tenthpercentage' => $request->tenthpercentage,
            'higherschoolname' => $request->higherschoolname,
            'higherpercentage' => $request->higherpercentage,
            'higherdepartment' => $request->higherdepartment,
            'program' => $request->program,
            'hearabout' => $request->hearabout,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('admission.index')
            ->with('success', 'Admission Added Successfully');
    }

    // Get Admission for Edit
    public function edit($id)
    {
        $admission = DB::table('admission')
            ->where('id', $id)
            ->first();

        return response()->json($admission);
    }

    // Update Admission
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'adharcard' => 'required|string',
            'email' => 'required|email',
            'phonenumber' => 'required|string',
            'tenthpercentage' => 'required|numeric',
            'higherschoolname' => 'required|string',
            'higherpercentage' => 'required|numeric',
            'higherdepartment' => 'required|string',
            'program' => 'required|string',
            'hearabout' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'pincode' => 'required|string',
        ]);

        DB::table('admission')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'adharcard' => $request->adharcard,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'tenthpercentage' => $request->tenthpercentage,
                'higherschoolname' => $request->higherschoolname,
                'higherpercentage' => $request->higherpercentage,
                'higherdepartment' => $request->higherdepartment,
                'program' => $request->program,
                'hearabout' => $request->hearabout,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'pincode' => $request->pincode,
                'updated_at' => now(),
            ]);

        return redirect()
            ->route('admission.index')
            ->with('success', 'Admission Updated Successfully');
    }

    
}