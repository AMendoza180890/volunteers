<?php
require_once 'controlador/plantillaC.php';
require_once 'controlador/mensajeC.php';
require_once 'controlador/tituloC.php';
require_once 'controlador/contactoc.php';

require_once 'modulo/mensajeM.php';
require_once 'modulo/tituloM.php';
require_once 'modulo/contactom.php';

$plantilla = new plantillaControlador();
$plantilla -> llamarPlantilla();
?>