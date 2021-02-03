<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Trabajos</title>
</head>
<body>
    <div class="container">
    <table class="table">
            <thead>
            <tr>
      <th scope="col">ID</th>
      <th scope="col">SERVICIO</th>
      <th scope="col">MONTO</th>
      <th scope="col">FECHA</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pedidos as $p)
    <tr>
      <td>{{$p->id}}</td>
      @switch($p->id_servicio)
      @case(1)
      <td>FULL</td>
      @break
      @case(2)
      <td>EXTERIOR+</td>
      @break
      @case(3)
      <td>EXTERIOR ECO</td>
      @break
      @case(4)
      <td>SEMI+</td>
      @break
      @case(5)
      <td>INTERIOR</td>
      @break
      @endswitch
      <td>{{$p->monto}}</td>
      <td>{{$p->updated_at}}</td>
    </tr>
   @endforeach
     </tbody>
     </table>
    </div>
</body>
</html>