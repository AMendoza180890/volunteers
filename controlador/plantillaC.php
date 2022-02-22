<?php
class plantillaControlador{
    public function llamarPlantilla(){
        try {
            if($_GET["ruta"] == "ENG"){
                include 'vista/plantillaENG.php';
            }else{
                include 'vista/plantillaESP.php';
            }
        } catch (exception $ex) {
            echo 'error - '.$ex->getMessage();
        }
    }
}
?>