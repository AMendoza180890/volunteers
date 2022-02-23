<?php
    require_once "Admin/modelo/conexionBD.php";

class mensajeclassM extends conexionBD{
    
    public static function guardarMensajeM($datosMensaje){
        try {
            $pdo = conexionBD::conexion()->prepare("INSERT INTO catmensajes(nombres, apellidos, telefono, email, tipoVoluntario, nombreLiderGrupo, comentario) VALUES (:nombres, :apellidos, :telefono, :email, :tipoVoluntario, :nombreLiderGrupo, :comentario)");

            $pdo->bindParam(":nombres",$datosMensaje["nombre"],PDO::PARAM_STR);
            $pdo->bindParam(":apellidos",$datosMensaje["apellido"],PDO::PARAM_STR);
            $pdo->bindParam(":telefono",$datosMensaje["telf"],PDO::PARAM_STR);
            $pdo->bindParam(":email",$datosMensaje["email"],PDO::PARAM_STR);
            $pdo->bindParam(":tipoVoluntario",$datosMensaje["tipoVoluntario"],PDO::PARAM_STR);
            $pdo->bindParam(":nombreLiderGrupo",$datosMensaje["liderGrupo"],PDO::PARAM_STR);
            $pdo->bindParam(":comentario",$datosMensaje["comentario"],PDO::PARAM_STR);

            // echo '<script>console.log("llega a modelo de guardar")</script>';

            return ($pdo->execute()?true:false);

        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
