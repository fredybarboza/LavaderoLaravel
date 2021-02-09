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
    @foreach($pedidos as $p)
    FACTURA N° {{$p->id}}
    <div style="border: 1px solid #ddd; border-radius: 5px">NOMBRE/S: {{$p->nombre}}</div>
    <br>
    <div style="border: 1px solid #ddd; border-radius: 5px">APELLIDO/S: {{$p->apellido}}</div>
    <br>
    <div style="border: 1px solid #ddd; border-radius: 5px">R.U.C/C.I: {{$p->ci}} </div>
    <hr>
    <div style="border: 1px solid #ddd; border-radius: 5px">DIRECCION: {{$p->direccion}} </div>
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
      <td>{{$p->id}}</td>
      <td>{{$p->id_servicio}}</td>
      <td>{{$p->monto}}</td>
    </tr>
    <tr>
      <td></td>
      <td>TOTAL</td>
      <td>{{$p->monto}}</td>
    </tr>
  </tbody>
</table>
@endforeach
    </div>
</body>
</html>