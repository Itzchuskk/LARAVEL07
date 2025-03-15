@extends('layouts.app')

@section('content')
    <h1>Gender Details</h1>
    <p>Name: {{ $record->name }}</p>
    <a href="{{ route('gender.index') }}">Back to List</a>
@endsection
