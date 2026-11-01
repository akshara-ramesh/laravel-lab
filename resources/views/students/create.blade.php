@extends('layouts.app')

@section('title', 'Add Student')

@section('content')

    <h2>Add Student</h2>

        @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        <label>Roll Number:</label>
        <input type="text" name="roll_no" required>
        <br><br>

        <label>Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Department:</label>
        <input type="text" name="department" value="CSE" required>
        <br><br>

        <label>Semester:</label>
        <input type="number" name="semester" value="7" required>
        <br><br>

        <label>CGPA:</label>
        <input type="number" step="0.01" name="cgpa">
        <br><br>

        <button type="submit">Save Student</button>

    </form>

@endsection