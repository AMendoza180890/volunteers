<?php
require_once "conexionBD.php";
class mensajeM extends conexionBD{

    static public function listademensajeM(){
        try {
            $pdo = conexionBD::conexion()->prepare("SELECT mensajecampaign.id, mensajecampaign.titulo, mensajecampaign.descripcionCorta, mensajecampaign.descripcionLarga, mensajecampaign.imagen, mensajecampaign.costo, mensajecampaign.cantidad, mensajecampaign.enlace, estado.descripcion FROM mensajecampaign INNER JOIN estado ON mensajecampaign.estado = estado.id ORDER BY estado.descripcion ASC");
            
            $pdo -> execute();
            return $pdo->fetchAll();

        } catch (exception $ex) {
            echo 'error - '.$ex;
        }
    }
}
