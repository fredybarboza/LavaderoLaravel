<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container my-3 py-3" style="border: 1px solid gray">
    <h2><b>CarWash</b></h2>
    <i>Coronel Bogado-Itapúa Py.</i><br>
    |||||||||||||||||||||||||||||||||||||||||||||
    <hr>
    FACTURA N° {{$pedidos->id}}
    <div style="border: 1px solid #ddd; border-radius: 5px">NOMBRE: {{$pedidos->id_usuario}}</div>
    <br>
    <div style="border: 1px solid #ddd; border-radius: 5px">R.U.C/C.I: </div>
    <hr>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">Sub Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$pedidos->id}}</td>
      <td>{{$pedidos->id_servicio}}</td>
      <td>{{$pedidos->monto}}</td>
    </tr>
    <tr>
      <td></td>
      <td>TOTAL</td>
      <td>{{$pedidos->monto}}</td>
    </tr>
  </tbody>
</table>
    </div>
</body>
</html>