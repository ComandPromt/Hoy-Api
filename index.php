<?php

function deliver_response($status, $hoy){
    header("HTTP/1.1 $status $status_message");
    $response['respuesta'] = $status;
    $response['hoy'] = $hoy;
    $json_response = json_encode($response);
    echo $json_response;
}

header('Content-Type:application/json');

$hoy = date("d/m/Y"); 

deliver_response(200, $hoy);

?>