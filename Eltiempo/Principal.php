<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>El tiempo</title>
</head>
<header>
<!-- Web del tiempo -->
    <h1> El tiempo</h1>
    <div class="fh">
    <a href="">Fecha: 15/09/2021.</a>
    <a href="">Hora: 10:38:32.</a>
    </div>

</header>
<body>
    <!-- Aqui tenemos los 4 cuadros de resumen del tiempo "son estaticos" -->
    <div class ="resumen">
        <article class= "r"><img id ="estado" src="./Lluvia.png"> <a href="./secundaria.php">España</a> </article>

        <article class= "r"><img id ="estado" src="./Lluvia.png"><a href="./secundaria.php"> Motril</a> </article>

        <article class= "r"><img id ="estado" src="./Lluvia.png"><a href="./secundaria.php"> Granada </a></article>

        <article class= "r"><img id ="estado" src="./Lluvia.png"><a href="./secundaria.php"> Madrid </a></article>

    </div>
    <main>
        <div class="imagen"><img src="./madrid.jpg">
        </div>
        <hr>
        <!-- en este apartado incrustamos el codigo en php para la funcion principal -->
    <?php
        require_once("./Funciones.php");
        Bdinfo();
         ?> 
    </main>
    <!-- Codigo para el calendario. -->
<label for="start">Calendario:</label>

<input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31"/>
<select name="dias">
    <option><a href="secundaria.php">Hoy</a></option>
    <option><a href="secundaria.php">Mañana</a></option>
    <option><a href="secundaria.php">7 dias</a></option>
</select>
<!-- Sin función por ahora, necesita una bd mayor para buscar. -->
<button name ="buscar" type="button">buscar</button>
</select>

<!-- Estetico, no conseguí adaptar lo bien para que fuera funcional  -->
<div class="Pdias"><img src="./7dias.png"></div>
</body>
</html>