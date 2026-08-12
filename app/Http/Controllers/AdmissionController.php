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

        // Letters only
        'name' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'dob' => 'required|date',

        'gender' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        // Aadhar - exactly 12 digits
        'adharcard' => [
            'required',
            'digits:12',
        ],

        'email' => 'required|email',

        // Phone number - 10 digits
        'phonenumber' => [
            'required',
            'digits:10',
        ],

        'tenthpercentage' => 'required|numeric',

        // Letters only
        'higherschoolname' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'higherpercentage' => 'required|numeric',

        'higherdepartment' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'program' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'hearabout' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'address' => 'required|string',

        'city' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'state' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'pincode' => [
            'required',
            'digits:6',
        ],

    ], [

        'name.regex' => 'Name can contain only letters and spaces.',
        'gender.regex' => 'Gender can contain only letters.',

        'adharcard.required' => 'Aadhar card number is required.',
        'adharcard.digits' => 'Aadhar card number must be exactly 12 digits.',

        'phonenumber.required' => 'Phone number is required.',
        'phonenumber.digits' => 'Phone number must be exactly 10 digits.',

        'higherschoolname.regex' => 'School name can contain only letters.',
        'higherdepartment.regex' => 'Department can contain only letters.',
        'program.regex' => 'Program can contain only letters.',
        'hearabout.regex' => 'This field can contain only letters.',

        'city.regex' => 'City can contain only letters.',
        'state.regex' => 'State can contain only letters.',

        'pincode.digits' => 'Pincode must be exactly 6 digits.',
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

        // Letters only
        'name' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'dob' => 'required|date',

        'gender' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        // Aadhaar exactly 12 digits
        'adharcard' => [
            'required',
            'digits:12',
        ],

        'email' => 'required|email',

        // Phone exactly 10 digits
        'phonenumber' => [
            'required',
            'digits:10',
        ],

        'tenthpercentage' => 'required|numeric|between:0,100',

        // Letters only
        'higherschoolname' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'higherpercentage' => 'required|numeric|between:0,100',

        'higherdepartment' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'program' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'hearabout' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'address' => 'required|string',

        'city' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        'state' => [
            'required',
            'string',
            'regex:/^[A-Za-z ]+$/',
        ],

        // Pincode exactly 6 digits
        'pincode' => [
            'required',
            'digits:6',
        ],

    ], [

        'name.required' => 'Name is required.',
        'name.regex' => 'Name can contain only letters.',

        'dob.required' => 'Date of birth is required.',
        'dob.date' => 'Please enter a valid date.',

        'gender.required' => 'Gender is required.',
        'gender.regex' => 'Gender can contain only letters.',

        'adharcard.required' => 'Aadhaar card number is required.',
        'adharcard.digits' => 'Aadhaar card number must be exactly 12 digits.',

        'email.required' => 'Email is required.',
        'email.email' => 'Please enter a valid email address.',

        'phonenumber.required' => 'Phone number is required.',
        'phonenumber.digits' => 'Phone number must be exactly 10 digits.',

        'tenthpercentage.required' => '10th percentage is required.',
        'tenthpercentage.numeric' => '10th percentage must be a number.',
        'tenthpercentage.between' => '10th percentage must be between 0 and 100.',

        'higherschoolname.required' => 'Higher school name is required.',
        'higherschoolname.regex' => 'School name can contain only letter.',

        'higherpercentage.required' => 'Higher percentage is required.',
        'higherpercentage.numeric' => 'Higher percentage must be a number.',
        'higherpercentage.between' => 'Higher percentage must be between 0 and 100.',

        'higherdepartment.required' => 'Higher department is required.',
        'higherdepartment.regex' => 'Department can contain only letters.',
        'program.required' => 'Program is required.',
        'program.regex' => 'Program can contain only letters.',

        'hearabout.required' => 'This field is required.',
        'hearabout.regex' => 'This field can contain only letters.',

        'address.required' => 'Address is required.',

        'city.required' => 'City is required.',
        'city.regex' => 'City can contain only letters.',

        'state.required' => 'State is required.',
        'state.regex' => 'State can contain only letters.',

        'pincode.required' => 'Pincode is required.',
        'pincode.digits' => 'Pincode must be exactly 6 digits.',
    ]);

    // Your existing update code here


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