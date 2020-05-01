@extends('layout')

@section('title', 'Home')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Videojuegos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
	<div class="col-md-12 text-center">
  <h1 class="bg-success">Bienvenido</h1> 
  <br>
  <h2><b>¡Estas en el sitio correcto!</b></h2>
  <br>
  <h2><u>Comencemos</u></h2>
  	</div>
  	<br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="4" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="5" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="6" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../images/ima8.png" alt="" style="margin:0 auto";>
      </div>
    
      <div class="item">
        <img src="../images/ima3.png" alt="New york" style="margin:0 auto";>
      </div>
      

      <div class="item">
        <img src="../images/ima4.png" alt="New york" style="margin:0 auto";>
      </div>
      

      <div class="item">
        <img src="../images/ima5.png" alt="New york" style="margin:0 auto";>
      </div>
      

      <div class="item">
        <img src="../images/ima6.png" alt="New york" style="margin:0 auto";>
      </div>
      

      <div class="item">
        <img src="../images/ima7.png" alt="New york" style="margin:0 auto";>
      </div>
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
	<div class="col-md-12 text-center">
	<h2>Encuentra toda la variedad de Juegos de diferentes caregorias a muy buenos precios</h2>
	</div>
</body>
</html>

@endsection