<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Student</title>

</head>
<body>
<div class="container">
    {{-- {{dd($students)}} --}}
    <div class="header d-flex justify-content-between">
        <a href="{{Route('teacher')}}" class="btn btn-danger mt-3">Teacher</a>
        <h1>Student Page</h1>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Date of birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Class</th>
      <th scope="col-4">Autobiography</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)

    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->date_of_birth}}</td>
      <td>{{$student->gender}}</td>
      <td>{{$student->class}}</td>
      <td>{{$student->autobiography}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
</body>
</html>

