<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container my-3">
<table class="table">
            <thead>
            <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CI</th>
      <th scope="col">-</th>
    </tr>
  </thead>
  <tbody>
  @foreach($empleados as $e)
    <tr>
      <td>{{ $e->id }}</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
      <a href="/pedidos">ASIGNAR ROL</a>
      </td>
    </tr>
    @endforeach
     </tbody>
     </table>
     </div>
</body>
</html>