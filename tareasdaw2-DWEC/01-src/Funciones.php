<?php
    
    function tiempo(){
        $temperatura = rand(12,35);
        $precipitaciones = rand(5,40);
        $sensacion = rand(10,30);
    }
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
    // function cambio(){
    //     if ($estado == $estado){
    //         $estado = rand(1,4);
    //     }
    // }

?>