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
<a class="btn btn-primary" href="/home" role="button">Back</a>  <b> | Configuración De Roles</b>
<hr>
<form action="/role" method="POST">
@csrf

<input type="hidden" name="user" value="{{$id}}">
<label>
<input type="radio" name="role" value="1"> Administrador 
</label>
<br>
<label>
<input type="radio" name="role" value="2"> Empleado 
</label>
<br>
<label>
<input type="radio" name="role" value="3"> Inhabilitar 
</label>
<br>
<hr>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
</body>
</html>