@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
<br>
	<div class="col-md-12 text-center">
  <h2 color="white">Videojuegos disponibles</h2>
  <p color="white">Selecciona el artículo de tu gusto</p>
	</div>
<br>
<div class="card-columns">
  <div class="card" style="width:300px">
    <img class="card-img-top" src="../images/ima6.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">COD: Modern Warfare</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary">Comprar</a>
    </div>
  </div>
<br>
    <div class="card" style="width:300px">
    <img class="card-img-top" src="../images/ima4.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Gears Of War 5</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary">Comprar</a>
    </div>
  </div>
<br>
	<div class="card" style="width:300px">
    <img class="card-img-top" src="../images/ima3.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Grand Theft Auto V</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary">Comprar</a>
    </div>
  </div>

<br>
  <div class="card" style="width:300px">
    <img class="card-img-top" src="../images/ima15.png" alt="Card image" style="width:80%">
    <div class="card-body">
      <h4 class="card-title">Car Mechanic</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary">Comprar</a>
    </div>
  </div>

<br>
  <div class="card" style="width:300px">
    <img class="card-img-top" src="../images/ima16.png" alt="Card image" style="width:80%">
    <div class="card-body">
      <h4 class="card-title">Arcade</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary">Comprar</a>
    </div>
  </div>

<br>
  <div class="card" style="width:300px">
    <img class="card-img-top" src="../images/ima17.png" alt="Card image" style="width:80%">
    <div class="card-body">
      <h4 class="card-title">Farming Simulator</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary">Comprar</a>
    </div>
  </div>

<br>
  <div class="card" style="width:300px">
    <img class="card-img-top" src="../images/ima18.jpg" alt="Card image" style="width:80%">
    <div class="card-body">
      <h4 class="card-title">Fifa 2020</h4>
      <p class="card-text"></p>
      <a href="#" class="btn btn-primary">Comprar</a>
    </div>
  </div>




</div>

</body>
</html>

@endsection