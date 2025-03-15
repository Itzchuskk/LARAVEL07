@extends('layouts.app')

@section('content')
    <h1>Universe Details</h1>
    <p>Name: {{ $record->name }}</p>
    <a href="{{ route('universe.index') }}">Back to List</a>
@endsection
