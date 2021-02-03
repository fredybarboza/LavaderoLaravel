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
<h4><a class="btn btn-primary" href="/home" role="button">Home</a>  <b> | Lista De Empleados</b></h4>
<hr>
<table class="table">
            <thead>
            <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CI</th>
      <th scope="col">DIRECCIÓN</th>
      <th scope="col">CELULAR</th>
      <th scope="col">-</th>
    </tr>
  </thead>
  <tbody>
  @foreach($empleados as $e)
    <tr>
      <td>{{ $e->id }}</td>
      <td>{{$e->nombre}}</td>
      <td>{{$e->apellido}}</td>
      <td>{{$e->ci}}</td>
      <td>{{$e->direccion}}</td>
      <td>{{$e->celular}}</td>
      <td>
      <a href="/trabajos/{{$e->id}}">Ver Trabajos</a>
      </td>
    </tr>
    @endforeach
     </tbody>
     </table>
     </div>
</body>
</html>