@extends('layout')

@section('content')
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Compra</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <div class="col-md-12 text-center">
  <h1><mark><u>Detalle de Compra</u></mark></h1>
  <br>
  <h2>Le agredecemos su preferencia.</h2>
</div>
  <br>
  <div class="container-fluid">
    <!-- Control the column width, and how they should appear on different devices -->
    <div class="row">
      <div class="col-sm-4" style="background-color:gray;">

        <img src="../images/ima4.png" style="width:400px; height: 400px";>

      </div>

      <div class="col-sm-6" style="background-color:white;">
        <br>
        <p class="lead"><mark>Game:</mark> <b>Gears Of War 5</b></p>
        <p class="strong"><mark>Description:</mark> <b>Gears 5 es un videojuego de acción en tercera persona desarrollado por The Coalition y publicado por Xbox Game Studios para Microsoft Windows y Xbox One. Es la sexta entrega de la saga Gears of War y la secuela directa de Gears of War 4. Fue lanzado el 10 de septiembre de 2019.</b></p>
        <p class="strong"><mark> Seller: </mark><b>Uriel Olascoaga</b></p>
        <p class="strong"><mark>Email:</mark> <b>Abuelo@gmail.com</b> </p>
        <p class="strong"><mark>Price:</mark> <u style="color:#FF0000;">$1250 Mx</u></p>
        <br>
        <br>
        <button>Comprar</button>
      </div>
</div>
    </div>


    <br>
  </div>

    <br>
      <br>
      <br>
<div align="center">

  <iframe width="560" height="315" src="https://www.youtube.com/embed/APqBWniRQbQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</body>
</html>

@endsection