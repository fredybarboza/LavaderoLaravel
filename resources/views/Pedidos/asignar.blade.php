<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>CarWashAdmin</title>
</head>
<body>
<div class="container my-3 py-3">
<a class="btn btn-primary" href="/home" role="button">Back</a> | <b>Asignar Empleado</b>
<hr>
<h5>ID EMPLEADO</h5>
<form action="/asignar" method="POST">
@csrf
<input type="text" value="{{$id}}" name="id" hidden>
<input type="text" name="id_empleado">
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
<hr>
<h5>Empleados</h5>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE/S</th>
      <th scope="col">APELLIDO/S</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($empleados as $e)
    <tr>
      <td>{{$e->id}}</td>
      <td>{{$e->nombre}}</td>
      <td>{{$e->apellido}}</td>
      </tr>
    @endforeach
    
  </tbody>
</table>
</div>
</body>
</html>