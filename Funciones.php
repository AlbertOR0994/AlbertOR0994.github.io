<?php
 
// funcion para llamar a la base de datos y ofrecer directamente una serie de datos.
function Bdinfo(){   
    $servidor = "localhost"; 
    $user = "root"; 
    $password = null; 
    $database = "eltiempo"; 

    //conectar 
    $db = new mysqli($servidor,$user, $password,$database); 
    
    //comprobamos la conexion 
    if($db->connect_error){ 
    die("" . $db->connect_errno . ": ". $db->connect_error)."</section>"; 
    } 
    else { 
    echo(""); 
    }

    //Preparar: 
    $sentencia = $db->prepare("SELECT `Htemp`,`Hprep`,`Hsenst`,`Hest`,`Mtemp`,`Mprep`,`Msenst`,`Mest` FROM `eltiempo` ");
    //ejecuto la sentencia
    $sentencia->execute();
    //le asigno variables
    $sentencia->bind_result($htemp,$hprep,$hsenst,$hest,$mtemp,$mprep,$msenst,$mest);
    
        while ($sentencia->fetch()){

        echo "<div class = 'Hoy'>
        <article class='hoy'>
            Hoy
            Temperaturas:$htemp 
            Sensación termica:$hsenst 
            precipitaciones:$hprep 
            Estado:$hest
            <a href='https://www.meteosat.com/'>MeteoSat</a>
        </article>
        <article class ='mañana'>
        Mañana
        Temperaturas:$mtemp 
        Sensación termica:$msenst 
        precipitaciones:$mprep 
        Estado:$mest
        <a href='https://www.meteosat.com/'>MeteoSat</a>
        </article>
    </div>";
    }
    //cerramos la sentencia.
    $sentencia->close();
    //preparamos la sentencia
    $sentencia = $db->prepare("SELECT `DAHtemp`,`DAHprep`,`DAHsenst`,`DAHest`,`DAMtemp`,`DAMprep`,`DAMsenst`,`DAMest` FROM `difanual`");
    //Ejecución
    $sentencia->execute();
    //Recogemos los datos.
    $sentencia->bind_result($dahtemp,$dahprep,$dahsenst,$dahest,$damtemp,$damprep,$damsenst,$damest);
    while ($sentencia->fetch()){
    echo "<div class ='Mañana'>
    
            <article class ='DiferenciaAnual'>
                Diferencia Anual 

                Temperaturas:$dahtemp
                Sensación termica:$dahsenst
                precipitaciones:$dahprep %
                Estado:$dahest
                <a href='https://www.meteosat.com/'>MeteoSat</a>
            </article>
            <article class = 'DiferenciaAnual'>
                Diferencia Anual 

                Temperaturas:$damtemp
                Sensación termica:$damsenst
                precipitaciones:$damprep %
                Estado:$damest
                
                <a href='https://www.meteosat.com/'>MeteoSat</a>
            </article>
        </div>";
        }
        //cerramos sentencia.
    $sentencia->close();
    }
?>
<!-- 
// Pruebas
    function tiempo(){
        $temperatura = rand(12,35);
        $precipitaciones = rand(5,40);
        $sensacion = rand(10,30);
    }
    // Pruebas
    function resumen(){

        $estado = rand(1,4);
        switch ($estado) {
            case '1':
                $estado = "soleado";
                break;
                case '2':
                    $estado = "Chubascos";
                    break;
                case '3':
                    $estado = "Nublado";
                    break;
                case '4':
                    $estado = "Lluvias";
                    break;
        }

        if ($estado == "soleado"){
            $estado = 1;
        }
        if ($estado == "Chubascos"){
            $estado = 2;
        }
        if ($estado == "Nublado"){
            $estado = 3;
        }
        if($estado == "Lluvias"){
            $estado = 1;
        }
    }
     function cambio(){
         if ($estado == $estado){
             $estado = rand(1,4);
         }
    } -->