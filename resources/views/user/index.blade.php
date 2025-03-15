@extends('layouts.app')

@section('content')
    <h1>User List</h1>
    <a href="{{ route('user.create') }}">Create New User</a>
    <ul>
        @foreach($records as $record)
            <li><a href="{{ route('user.show', $record->id) }}">{{ $record->name }}</a></li>
        @endforeach
    </ul>
@endsection
