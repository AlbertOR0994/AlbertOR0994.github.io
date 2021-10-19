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
    <h1> El tiempo</h1>
    <div class="fh">
    <a href="https://quedia.es/">Fecha: 15/09/2021.</a>
    <a href="https://quedia.es/">Hora: 10:38:32.</a>
    
    </div>
    <button class="inicio"><a href="./Principal.php">Inicio</a></button>
</header>
<body>
    <div class ="resumen">
    
        <article class= "r"><img src="./Lluvia.png"><a href=""> Motril</a> </article>

    </div>
    <main>
        <div class="imagen"><img src="./motril.jpg">
        </div>
        <hr>
        <?php
        require_once("./Funciones.php");
        Bdinfo();
         ?>
    </main>

    <label for="start">Calendario:</label>

<input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
       <select name="dias">
    <option>Hoy</option>
    <option>Mañana</option>
    <option>7 dias</option>
</select>
<button>buscar</button>
       <div class="Pdias"><img src="./7dias.png"></div>

</body>
</html>