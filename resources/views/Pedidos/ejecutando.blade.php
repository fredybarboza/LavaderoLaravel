<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>CarWash</title>
</head>
<body>
    <div class="container my-3 py-3">
    <h4><a class="btn btn-primary" href="/home" role="button">Home</a>  <b> | Pedidos En Ejecución</b></h4>
<hr>
    @if($n!=null)
    <table class="table">
            <thead>
            <tr>
      <th scope="col">ID</th>
      <th scope="col">SERVICIO</th>
      <th scope="col">MONTO</th>
      <th scope="col">MARCA</th>
      <th scope="col">MODELO</th>
      <th scope="col">MATRICULA</th>
      <th scope="col">ACCIÓN</th>
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
      <td>{{$p->marca}}</td>
      <td>{{$p->modelo}}</td>
      <td>{{$p->matricula}}</td>
      <td>
      <a class="btn btn-primary" href="/finalizar-pedido/{{$p->id}}" role="button">Finalizar</a>
      </td>
    </tr>
   @endforeach
     </tbody>
     </table>
  @else
  <div class="alert alert-primary" role="alert">
  Ningún pedido ejecutándose actualmente
</div>
  @endif
    </div>
</body>
</html>