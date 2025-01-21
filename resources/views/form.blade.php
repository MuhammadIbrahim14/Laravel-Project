<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form</h1>
    <form action="/create" method="post" enctype="multipart/form-data">
        @csrf
        <label >Name</label>
        <input type="text" name="name">
        <label >Email</label>
        <input type="email" name="email">
        <label >Select Image</label>
        <input type="file" name="image">
        <button type="submit">Insert</button>
        <a href="/read">View Records</a>
    </form>
</body>
</html>