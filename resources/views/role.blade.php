<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="/role" method="POST">
@csrf

<input type="hidden" name="user" value="{{$id}}">
<label>
<input type="radio" name="role" value="1">Administrador
</label>

<label>
<input type="radio" name="role" value="2">Empleado
</label>
<br>
<hr>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
{{$id}}
</div>
</body>
</html>