<?php
header('Content-Type: application/json');
require_once '../../modelo/match.php';
require_once '../../modelo/persona.php';

$idPersona = $_GET['id'];

$personaADevolver =Persona::getPersona($idPersona);

echo json_encode($personaADevolver);
