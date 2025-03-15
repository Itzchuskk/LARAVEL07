<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;

class UniverseController extends Controller
{
    public function index()
    {
        $records = Universe::all();
        return view('universe.index', compact('records'));
    }

    public function create()
    {
        return view('universe.create');
    }

    public function store(Request $request)
    {
        Universe::create($request->validate([
            // Define validation rules here
        ]));

        return redirect()->route('universe.index')->with('success', 'Universe created successfully.');
    }

    public function show($id)
    {
        $record = Universe::findOrFail($id);
        return view('universe.show', compact('record'));
    }
}
