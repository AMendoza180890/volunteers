<?php
require_once 'controlador/plantillaC.php';
require_once 'controlador/mensajeC.php';

require_once 'modulo/mensajeM.php';

$plantilla = new plantillaControlador();
$plantilla -> llamarPlantilla();
?>