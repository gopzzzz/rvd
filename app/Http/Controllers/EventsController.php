<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    // Display Events
    public function index()
    {
        $events = DB::table('events')->get();

        return view('events', compact('events'));
    }

   // Store New Event
public function store(Request $request)
{
    $request->validate([
        'type' => [
            'required',
            'string',
            'max:255',
            'regex:/^[A-Za-z ]+$/',
        ],

        'title' => [
            'required',
            'string',
            'max:255',
            'regex:/^[A-Za-z ]+$/',
        ],

        'description' => [
            'required',
            'string',
            'max:255',
            'regex:/^[A-Za-z ]+$/',
        ],

        'date' => 'required|date',

    ], [
        'type.required' => 'Type is required.',
        'type.regex' => 'Type can contain only letters.',

        'title.required' => 'Title is required.',
        'title.regex' => 'Title can contain only letters.',

        'description.required' => 'Description is required.',
        'description.regex' => 'Description can contain only letters.',

        'date.required' => 'Date is required.',
        'date.date' => 'Please enter a valid date.',
    ]);

    // Your database insert code here


        DB::table('events')->insert([
            'type' => $request->type,
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('events.index')
            ->with('success', 'Event Added Successfully');
    }

    // Get Single Event (for Edit)
    public function edit($id)
    {
        $event = DB::table('events')->where('id', $id)->first();

        return response()->json($event);
    }

    // Update Event
public function update(Request $request, $id)
{
    $request->validate([
        'type' => [
            'required',
            'string',
            'max:255',
            'regex:/^[A-Za-z ]+$/',
        ],

        'title' => [
            'required',
            'string',
            'max:255',
            'regex:/^[A-Za-z ]+$/',
        ],

        'description' => [
            'required',
            'string',
            'max:255',
            'regex:/^[A-Za-z ]+$/',
        ],

        'date' => 'required|date',

    ], [
        'type.required' => 'Type is required.',
        'type.regex' => 'Type can contain only letters.',

        'title.required' => 'Title is required.',
        'title.regex' => 'Title can contain only letters.',

        'description.required' => 'Description is required.',
        'description.regex' => 'Description can contain only letters.',

        'date.required' => 'Date is required.',
        'date.date' => 'Please enter a valid date.',
    ]);

    // Your update code here

        DB::table('events')
            ->where('id', $id)
            ->update([
                'type' => $request->type,
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
                'updated_at' => now(),
            ]);

        return redirect()
            ->route('events.index')
            ->with('success', 'Event Updated Successfully');
    }

    
}