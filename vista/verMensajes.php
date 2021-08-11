<?php
    require '../conexion.class.php';
    require '../controlador/Mensaje.php';
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' > 
        <link rel="stylesheet" type="text/css" href="../css/styles.php">  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    </head>

    <body id="bodyMessages">
        <?php
            //error_reporting(0);
            session_start();
            
            if(!isset($_SESSION['usuar'])){
                //$varSession = $_SESSION['usuar'];

                //if($varSession == null || $varSession = ""){
                    echo"
                    <div class=\"unaccess\">
                        <h1>No tiene acceso</h1>
                        <a href=\"index.php\">Back to home</a>
                    </div>
                    ";

                    die();
                //}
            }
            
        ?>        
            
        <section class="msjs" id="msjs">
            <h1>Mensajes</h1>

            <form name="searching" action="" method="post" onsubmit="return ValidarOpciones()" onclick="CrearFormBusqueda()">
                
                <!--<label for="selectSearch" class="form-label">Choose how to search a mesage: </label>-->
                <div class="options">
                    <select id="selectSearch" name="selectSearch" class="form-select" aria-label="Default select example">
                        <option value="line">Choose how to search a mesage:</option>
                        <option value="id">ID</option>
                        <option value="email">Email</option>
                        <option value="lastName">Last Name</option>
                        <option value="everyMessages">Every Messages</option>
                    </select>               
                </div>
                <!--<input type="submit" name="slct" value="Send">-->
            </form>
            
            <br>

            <section class="formBuscar">
                        
            </section>

            <div class="table">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Mensaje</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    
                    <tbody id="contenido">
                        <?php                            
                            
                            $table = '';

                            if(isset($_POST['searchID'])){                                    
                                $table = Mensaje::BusquedaMensaje('msj_id', $_POST['searchID']);
                            }
                                
                            if(isset($_POST['searchEmail'])){
                                $table = Mensaje::BusquedaMensaje('email', $_POST['searchEmail']);
                            }

                            if(isset($_POST['searchLastName'])){
                                $table = Mensaje::BusquedaMensaje('apellido', $_POST['searchLastName']);
                            }

                            if(isset($_POST['selectSearch'])){
                                if($_POST['selectSearch'] == "everyMessages"){                                 

                                    header('location: mostrar.php');                                                                    
                                }                            
                            }

                            if($table != "")
                                echo $table;
                        ?>

                    </tbody>
                </table>
                
            </div>

            <a href="index.php?usuario=admin">Back to home</a>
        </section>        
        
        <script src="../controlador/Validacion.js"></script>
        <script src="../controlador/crearBusqueda.js"></script>
    </body>
</html>