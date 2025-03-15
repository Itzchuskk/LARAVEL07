@extends('layouts.app')

@section('content')
    <h1>User Details</h1>
    <p>Name: {{ $record->name }}</p>
    <a href="{{ route('user.index') }}">Back to List</a>
@endsection
