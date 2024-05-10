<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Teacher</title>

</head>
<body>
<div class="container">
    <div class="header d-flex justify-content-between">
        <a href="{{Route('student')}}" class="btn btn-danger mt-3">Student</a>
        <h1>Teacher Page</h1>
    </div>
<table class="table">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Date of birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Department</th>
      <th scope="col">Position</th>
      <th scope="col-4">Autobiography</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($teachers as $teacher)

    <tr>
        <td>{$teacher->id}</td>
        <td>{$teacher->name}</td>
        <td>{$teacher->age}</td>
        <td>{$teacher->date_of_birth}</td>
        <td>{$teacher->gender}</td>
        <td>{$teacher->department}</td>
        <td>{$teacher->position}</td>
        <td>{$teacher->autobiography}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>

