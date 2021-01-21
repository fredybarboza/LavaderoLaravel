<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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