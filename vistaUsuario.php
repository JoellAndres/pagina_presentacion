<?php
    include('read.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Joel.T | Usuario</title>
        <link rel="stylesheet" type="text/css" href="styles.php">        
    </head>

    <body>
        <h1>Para ver los mensajes ingrese el usuario y la clave</h1>

        <form id="frm_ingresar" action="" method="POST" onsubmit="return ValidarCamposUsuario()">
            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" id="usuario">
            
            <label for="clave">Clave: </label>
            <input type="text" name="clave" id="clave">
            
            <input type="submit" name="us" value="Enviar">
        </form>
        
        <?php
            $usuario = "";
            $clave = "";

            BuscarUsuarioYClave($usuario, $clave);
            
            if(isset($_POST['usuario'], $_POST['clave'])){
                if($_POST['usuario'] == $usuario && $_POST['clave'] == $clave){
                    header("location: verMensajes.php");
                }
                else{
                    echo "Datos erroneos";
                }
            }            
        ?>          

        <div class="back">
            <a href="contact.php"> <button type="button" class="btn btn-outline-danger">Back</button></a>
        <div>  

        <script src="Usuario.js"></script>
    </body>
</html>