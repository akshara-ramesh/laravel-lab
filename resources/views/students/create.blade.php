<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

    <h1>Add Student</h1>

    <form action="{{ route('students.store') }}" method="POST">

        @csrf

        Roll Number:
        <input type="text" name="roll_no" required>
        <br><br>

        Name:
        <input type="text" name="name" required>
        <br><br>

        Email:
        <input type="email" name="email" required>
        <br><br>

        Department:
        <input type="text" name="department" value="CSE" required>
        <br><br>

        Semester:
        <input type="number" name="semester" value="7" required>
        <br><br>

        CGPA:
        <input type="number" step="0.01" name="cgpa">
        <br><br>

        <button type="submit">Save Student</button>

    </form>

</body>
</html>