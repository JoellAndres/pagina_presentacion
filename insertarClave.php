<?php
    
    require 'conexion.class.php';

    $db = new Conexion();

    $usuario="";
    $clave="";
    $clave_cifrada = password_hash($clave, PASSWORD_DEFAULT, ['cost' => 10]);
        
    $query = "INSERT INTO `claveusuario`(`usuario`, `clave`) VALUES ('$usuario','$clave_cifrada')";

    $result = $db->query($query);

    $db->affected_rows < 0 ? print 'Hubo un problema' : print 'clave nueva guardada';
    
    
?>