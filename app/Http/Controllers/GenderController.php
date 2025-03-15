<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    public function index()
    {
        $records = Gender::all();
        return view('gender.index', compact('records'));
    }

    public function create()
    {
        return view('gender.create');
    }

    public function store(Request $request)
    {
        Gender::create($request->validate([
            // Define validation rules here
        ]));

        return redirect()->route('gender.index')->with('success', 'Gender created successfully.');
    }

    public function show($id)
    {
        $record = Gender::findOrFail($id);
        return view('gender.show', compact('record'));
    }
}
