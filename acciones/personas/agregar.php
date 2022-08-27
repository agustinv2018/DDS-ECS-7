<?php
header('Content-Type: application/json');
require_once '../../modelo/match.php';
require_once '../../modelo/persona.php';
require_once 'response/agregarResponse.php';

$json = file_get_contents('php://input',true);
// Converts it into a PHP object
$req = json_decode($json);

$p = new Persona();
$p->ApellidoNombre = $req->ApellidoNombre;
$personaAgregada = $p->Agregar();

$resp = new AgregarResponse();
$resp->PersonaAgregada = $personaAgregada;
echo json_encode($resp);







