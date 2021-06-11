<?php
    function BuscarUsuarioYClave(&$us, &$cl){
        require 'conexion.class.php';

        !isset($_POST) ? die('Acceso denegado') : '';

        $db = new Conexion();

        $usuario = "";
        $clave = "";

        if(isset($_POST['us'])){
            $query = "SELECT * FROM `claveusuario` WHERE id=1";                    
            $res = $db->query($query);            

            while($row = mysqli_fetch_array($res)){
                $usuario = $row['usuario'];
                $clave = $row['clave'];
            }
        }

        $us = $usuario;
        $cl = $clave;        
    }    
?>