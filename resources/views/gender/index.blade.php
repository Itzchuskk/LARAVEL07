@extends('layouts.app')

@section('content')
    <h1>Gender List</h1>
    <a href="{{ route('gender.create') }}">Create New Gender</a>
    <ul>
        @foreach($records as $record)
            <li><a href="{{ route('gender.show', $record->id) }}">{{ $record->name }}</a></li>
        @endforeach
    </ul>
@endsection
