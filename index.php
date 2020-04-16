<?php

function deliver_response($status, $hoy){
    header("HTTP/1.1 $status $status_message");
    $response['respuesta'] = $status;
    $response['hoy'] = $hoy;
    $json_response = json_encode($response);
    echo $json_response;
}

header('Content-Type:application/json');

date_default_timezone_set('Europe/Madrid');

$hoy = date("d/m/Y"); 

deliver_response(200, $hoy);

?>