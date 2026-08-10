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
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

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
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

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

    // Delete Event (Optional)
    public function destroy($id)
    {
        DB::table('events')->where('id', $id)->delete();

        return redirect()
            ->route('events.index')
            ->with('success', 'Event Deleted Successfully');
    }
}