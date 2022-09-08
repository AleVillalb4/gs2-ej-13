<?php

header('Content-Type: application/json');

require_once '../../modelo/operador.php';
require_once '../../modelo/satelite.php';
require_once 'response/consultarResponse.php';



$op = new Operador();
$op->Nombre ='ARSAT';
$op->TipoEmpresa= 'Publica';
$op->FormaLegal= 'Sociedad anónima';

$sat = new Satelite();
$sat-> Id = $_GET['id'];
$sat->Nombre= 'Arsat-1';
$sat->TipoMision= 'comunicaciones';
$sat->DuracionEnAnios= '15';
$sat->Operador= $op;

$consul = new ConsultarResponse();
$consul->Satelite= $sat;

echo json_encode($consul);


