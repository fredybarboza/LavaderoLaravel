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
   <h4><a class="btn btn-primary" href="/home" role="button">Home</a>  <b> | Nuevo Empleado</b></h4>
<hr>
    <form action="/nuevo-empleado" method="POST">
    @csrf
    <div class="form-group"> 
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRES">
    </div>   
    <div class="form-group"> 
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="APELLIDOS">
    </div>  
    <div class="form-group"> 
        <input type="number" class="form-control" id="ci" name="ci" placeholder="N° CÉDULA DE IDENTIDAD">
    </div> 
    <div class="form-group"> 
        <input type="number" class="form-control" id="celular" name="celular" placeholder="N° CELULAR">
    </div> 
    <div class="form-group"> 
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="DIRECCIÓN">
    </div> 
    <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
    </div>
</body>
</html>