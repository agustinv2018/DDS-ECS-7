<?php
header('Content-Type: application/json');
require_once '../../modelo/match.php';
require_once '../../modelo/persona.php';
require_once 'request/requestSolicitud.php';
require_once 'response/responseSolicitud.php';

$json = file_get_contents('php://input',true);
// Converts it into a PHP object
$req = json_decode($json);

$personaQueSolicitaMatch = new Persona();
$personaQueSolicitaMatch = Persona::getPersona($req->IdPersonaSolicitante);
$solicitudDematcheoGenerada = $personaQueSolicitaMatch->GenerarSolicitudDeMatcheo($req->IdPersonaAMatchear);

$resp = new ResponseSolicitud();
$resp->Matcheo = $solicitudDematcheoGenerada;

echo json_encode($resp);






