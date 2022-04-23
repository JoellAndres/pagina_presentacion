<?php
    require '../controlador/Administrador.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>User</title>
        <link rel="stylesheet" type="text/css" href="../css/styles.php">   
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
        <meta charset='utf-8' >
    </head>

    <body class="bodyUser">
        <h1 id="userTitle">Type Password and User</h1>

        <?php if(isset($_GET['bandera'])):?>
            <?php if($_GET['bandera'] == 1):?>
                <div class="warning">
                    <h4>Wrong data. Please, try again</h4>
                </div>
            <?php endif;?>
        <?php endif;?>

        
        <?php if(isset($_GET['cambiada'])):?>
            <?php if($_GET['cambiada'] == 0):?>
                <div class="succes">
                    <h4>Password changed successfully</h4>
                </div>
            <?php endif;?>
        <?php endif;?>

        <form id="frm_ingresar" class="formUser" action="" method="POST" onsubmit="return ValidarCamposUsuario()">
            <div class="mb-3 row">
                <label for="usuario" class="col-sm-2 col-form-label">User:</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" name="usuario" id="usuario" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="clave" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="clave" id="clave">
                </div>
            </div>

            <button type="submit" name="us" class="btn btn-outline-primary">Send</button>
        </form>
        
        <?php
            if(isset($_POST['usuario'], $_POST['clave'])){
                
                $admin1 = new Administrador($_POST['usuario'], $_POST['clave']);
                $admin1->Verificar();
            }            
        ?>          
        
        <br>        
        
        <section class="newPass">
            <input id="btnNewPass" type="button" value="Change password" class="btn btn-outline-primary" onclick="MyFunction()">
        </section>

        <div class="back">
            <a href="index.php?usuario=vista"> <button type="button" class="btn btn-dark">Back</button></a>
        <div>  

        <script src="../controlador/scriptProject.js"></script>
        <script src="../controlador/Script.js"></script>
        <script src="../controlador/Validacion.js"></script>    
    </body>
</html>