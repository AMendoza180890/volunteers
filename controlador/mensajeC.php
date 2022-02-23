<?php
class mensajeclassC{
    public function guardarMensaje(){
        try {
            if (isset($_POST["fname"])) {

                $datosFormulario =["nombre"=>$_POST["fname"],"apellido"=>$_POST["lname"],"telf"=>$_POST["phone"],"email"=>$_POST["email"],"tipoVoluntario"=>$_POST["tvolunteer"],"liderGrupo"=>$_POST["responsable"],"comentario"=>$_POST["description"],];
                
                $obtenerSecciones = mensajeclassM::guardarMensajeM($datosFormulario);

                if ($obtenerSecciones){
                    $nombre = $_POST["fname"];
                    $apellido = $_POST["lname"];
                    $telf = $_POST["phone"];
                    $mail = $_POST["email"];
                    $tipoVoluntario = $_POST["tvolunteer"];
                    $liderGrupo = $_POST["responsable"];
                    $comentario = $_POST["description"];
                    mensajeClassC::enviarMensajeEmail($nombre,$apellido,$telf,$mail,$tipoVoluntario,$liderGrupo,$comentario);
                }else{
                    echo '<script>alert("ocurrio un error")</script>';
                }
            }

        } catch (exception $ex) {
            echo 'error: '.$ex->getMessage();
        }
    }

    public static function enviarMensajeEmail($nombre,$apellido,$telf,$mail,$tipoVoluntario,$liderGrupo,$comentario){
        try {
            $to = $mail;
            //$additional_headers = "";
            $subject = "Informacion de Formulario de Voluntario";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "From: sponsor@tesorosdedios.org" . "\r\n" ;
            $headers .= "CC: tecnologia@tesorosdedios.org". "\r\n" ;
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            $message = "<html>
                            <head>
                                <title>Informacion de Contacto Voluntarios</title>
                            </head>
                            <body>
                                <h2>Informacion del Solicitante</h2>
                                <p>Nombre: ".$nombre."</p>
                                <p>Apellido: ".$apellido."</p>
                                <p>Telefono(opcional): ".$telf."</p>
                                <p>tipoVoluntario: ".$tipoVoluntario."</p>
                                <p>Lider de Grupo (aplica si es grupo)".$liderGrupo."</p>
                                <p>Comentario: ".$comentario."</p>
                            </body>
                        </html>";
            
            mail($to, $subject, $message, $headers);
        } catch (exception $ex) {
            echo $ex->getMessage();
        }
    }
}
?>