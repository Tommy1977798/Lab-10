@extends('layouts.app')

@section('title', 'Well Details')

@section('content')
    <h2>Well Details</h2>

    <p><strong>Name:</strong> {{ $well->name }}</p>
    <p><strong>Location:</strong> {{ $well->location }}</p>
    <p><strong>Production Rate:</strong> {{ $well->production_rate }} barrels/day</p>
    <p><strong>Status:</strong> {{ ucfirst($well->status) }}</p>

    <a href="{{ route('wells.edit', $well->id) }}" class="btn">Edit</a>
    <a href="{{ route('wells.index') }}" class="btn">Back to List</a>
@endsection
