<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <h1>Student's Records</h1>
        <table class="table table-hover table-striped">
            
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            @foreach($records as $rec)
            <tr>
                <td>{{$rec['id']}}</td>
                <td>{{$rec['name']}}</td>
                <td>{{$rec['email']}}</td>
                <td>
                    <img src="student_images/{{$rec['image']}}" alt="" width="100px">
                </td>
                <td>
                    <a href="{{route('remove', ['id' => $rec->id])}}"><i class="bi bi-trash3-fill text-danger"></i></a>
                    <a href="{{route('edit', ['id'=> $rec->id])}}"><i class="bi bi-pencil-square text-warning"></i></a>
                </td>
            </tr>
            @endforeach
            
        </table>
        <a href="/form" class="btn btn-primary">Back To Form</a>
    </div>
</body>
</html>