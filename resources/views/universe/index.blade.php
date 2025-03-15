@extends('layouts.app')

@section('content')
    <h1>Universe List</h1>
    <a href="{{ route('universe.create') }}">Create New Universe</a>
    <ul>
        @foreach($records as $record)
            <li><a href="{{ route('universe.show', $record->id) }}">{{ $record->name }}</a></li>
        @endforeach
    </ul>
@endsection
