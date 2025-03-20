<?php

$gastos_f = [];
$gastos_v = [];

date_default_timezone_set("America/Argentina/Buenos_Aires");

function dia_semana(){
    
    $dia = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miércoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sábado",
        "Sunday" => "Domingo"
    ];
    $dia_final = $dia[date("l")];

    return $dia_final;
}

$fecha_actual = date("d/m/Y");
$hora = date("H:i a");