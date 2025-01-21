<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Record</h1>
    <form action="{{route('update', ['update_id' => $id->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <label >Name</label>
        <input type="text" name="name" value="{{$id->name}}">
        <label >Email</label>
        <input type="email" name="email" value="{{$id->email}}">
        <label >Select Image</label>
        <input type="file" name="image">
        <button type="submit">Update Record</button>
    </form>
</body>
</html>