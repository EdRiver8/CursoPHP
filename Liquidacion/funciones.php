<?php

    function cesantias($diasLaborados, $salario){

    }

    function vacaciones(){
        $dias = dias_pasados('', '02/09/2021');
    }

    function edad($fechaNacimiento){
        $dias = dias_pasados($fechaNacimiento, '02/09/2021');
    }

    function dias_pasados($fecha_inicial,$fecha_final)
    {
        $dias = (strtotime($fecha_inicial)-strtotime($fecha_final))/86400;//60*60*24 = 86400
        $dias = abs($dias); 
        $dias = floor($dias); 
        return $dias;
    }



?>