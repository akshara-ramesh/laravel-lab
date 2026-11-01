<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

    <h1>Student List</h1>

    @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <a href="{{ route('students.create') }}">Add Student</a>

    @foreach($students as $student)
        <p>
            {{ $student->name }}
            <a href="{{ route('students.show', $student->id) }}">View</a>
        </p>
    @endforeach

</body>
</html>