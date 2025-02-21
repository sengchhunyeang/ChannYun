<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Students List</h1>
    <ul>
        @foreach ($students as $student)
            <li>
                {{ $student->student_name }} - {{ $student->phone_number }}
            </li>
        @endforeach
    </ul>
</body>
</html>