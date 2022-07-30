<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    @endif
<form action="profile" method="POST" enctype="multipart/form-data">
    @csrf 
    <input type="file" name="photo" require>
    <input type="submit" value="Enviar">
</form>
</body>
</html>