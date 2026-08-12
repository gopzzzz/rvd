<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = DB::table('faq')->get();

        return view('faq', compact('faqs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => [
                'required',
                'string'
            ],

            'answer' => [
                'required',
                'string'
            ],
        ]);

        DB::table('faq')->insert([
            'question' => $request->question,
            'answer' => $request->answer,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()
            ->route('faq')
            ->with('success', 'FAQ added successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => [
                'required',
                'integer'
            ],

            'question' => [
                'required',
                'string'
            ],

            'answer' => [
                'required',
                'string'
            ],
        ]);

        DB::table('faq')
            ->where('id', $request->id)
            ->update([
                'question' => $request->question,
                'answer' => $request->answer,
                'updated_at' => now(),
            ]);

        return redirect()
            ->route('faq')
            ->with('success', 'FAQ updated successfully.');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required|integer'
        ]);

        DB::table('faq')
            ->where('id', $request->id)
            ->delete();

        return redirect()
            ->route('faq')
            ->with('success', 'FAQ deleted successfully.');
    }
}