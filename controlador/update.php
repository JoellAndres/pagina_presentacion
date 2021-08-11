<?php
    !isset($_POST) ? die('Acceso denegado') : '';

    require '../read.php';
    
    if(isset($_POST['newPass'])){
        $usuarioClave = $_POST['_usuario'];
        $clave = "";
        $claveNueva = password_hash($_POST['_nuevaClave'], PASSWORD_DEFAULT, ['cost' => 10]); 
        
        BuscarUsuarioYClave($usuarioClave, $clave);
        
        if(password_verify($_POST['_clave'], $clave)){
            echo "$usuarioClave - $clave";

            $db = new Conexion();
            
            $query = "UPDATE `claveusuario` SET `clave`='$claveNueva' WHERE usuario='$usuarioClave'";                               
            $res = $db->query($query);
    
            if($db->affected_rows < 0){
                print 'Hubo un problema';
            }else{
                header('location: ../vista/vistaUsuario.php?cambiada=0');
            }
        }
        else{
            header('location: ../vista/vistaUsuario.php?bandera=1');
        }
    }
?>