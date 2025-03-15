<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperHero;

class SuperHeroController extends Controller
{
    public function index()
    {
        $records = SuperHero::all();
        return view('superhero.index', compact('records'));
    }

    public function create()
    {
        return view('superhero.create');
    }

    public function store(Request $request)
    {
        SuperHero::create($request->validate([
            // Define validation rules here
        ]));

        return redirect()->route('superhero.index')->with('success', 'SuperHero created successfully.');
    }

    public function show($id)
    {
        $record = SuperHero::findOrFail($id);
        return view('superhero.show', compact('record'));
    }
}
