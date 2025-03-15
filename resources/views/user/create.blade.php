@extends('layouts.app')

@section('content')
    <h1>Create User</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <!-- Add input fields for the model attributes -->
        <button type="submit">Save</button>
    </form>
@endsection
