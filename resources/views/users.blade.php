<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Usuarios</title>
</head>
<body>
<div class="container my-3">
<a class="btn btn-primary" href="/home" role="button">Back</a>
<hr>
<h4>Usuarios</h4>
<table class="table">
            <thead>
            <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">ROL</th>
      <th scope="col">-</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $u)
    <tr>
      <td>{{ $u->id }}</td>
      <td>{{ $u->name }}</td>
      <td>{{ $u->email }}</td>
      @switch($u->role_id)
      @case(1)
      <td>Administrador</td>
      @break
      @case(2)
      <td>Empleado</td>
      @break
      @case(3)
      <td>Visitante</td>
      @break
      @endswitch
      <td>
      <a href="/role/{{$u->id}}">ASIGNAR ROL</a>
      </td>
    </tr>
    @endforeach
     </tbody>
     </table>
     </div>
     
</body>
</body>
</html>