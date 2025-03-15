<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $records = User::all();
        return view('user.index', compact('records'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        User::create($request->validate([
            // Define validation rules here
        ]));

        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    public function show($id)
    {
        $record = User::findOrFail($id);
        return view('user.show', compact('record'));
    }
}
