<?php
include_once 'controlador/plantillaC.php';
include_once 'controlador/usuariosC.php';
include_once 'controlador/rolesC.php';
include_once 'controlador/tratamientoImagen.php';
include_once 'controlador/tratamientoRecursos.php';
include_once 'controlador/homeC.php';
include_once 'controlador/tituloC.php';
include_once 'controlador/seccionC.php';

include_once 'modelo/usuariosM.php';
include_once 'modelo/rolesM.php';
include_once 'modelo/homeM.php';
include_once 'modelo/tituloM.php';
include_once 'modelo/seccionM.php';


$plantilla = new plantillaAdminLteC();
$plantilla -> llamarPlantillaAdminLte();
?>