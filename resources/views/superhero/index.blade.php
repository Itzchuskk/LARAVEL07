@extends('layouts.app')

@section('content')
    <h1>SuperHero List</h1>
    <a href="{{ route('superhero.create') }}">Create New SuperHero</a>
    <ul>
        @foreach($records as $record)
            <li><a href="{{ route('superhero.show', $record->id) }}">{{ $record->name }}</a></li>
        @endforeach
    </ul>
@endsection
