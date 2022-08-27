<?php

header('Content-Type: application/json');
require_once 'response/consultarTodasResponse.php';
require_once '../../modelo/persona.php';



$resp = new ConsultarTodasResponse();
$resp->Personas = Persona::BuscarTodasPersonas();
echo json_encode($resp);
