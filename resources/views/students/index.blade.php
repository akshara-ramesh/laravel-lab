@extends('layouts.app')

@section('title', 'Student List')

@section('content')

    <h2>Student List</h2>

    @if(session('status'))
        <p style="color: green;">
            {{ session('status') }}
        </p>
    @endif

    <a href="{{ route('students.create') }}">Add Student</a>

    @foreach($students as $student)

        <div>
            <p>Name: {{ $student->name }}</p>
            <p>Roll Number: {{ $student->roll_no }}</p>

            <a href="{{ route('students.show', $student->id) }}">
                View Details
            </a>
        </div>

        <hr>

    @endforeach

@endsection