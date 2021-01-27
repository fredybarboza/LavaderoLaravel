<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container my-3 py-3">
<form action="/asignar" method="POST">
@csrf
<input type="text" value="{{$id}}" name="id" hidden>
<input type="text" name="id_empleado">
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
</body>
</html>