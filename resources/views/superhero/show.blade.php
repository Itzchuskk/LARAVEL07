@extends('layouts.app')

@section('content')
    <h1>SuperHero Details</h1>
    <p>Name: {{ $record->name }}</p>
    <a href="{{ route('superhero.index') }}">Back to List</a>
@endsection
