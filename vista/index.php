<?php      
    if(!isset($_GET['usuario'])){
        header("location: index.php?usuario=vista");
    }

    require '../controlador/Header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Joel T. | Presentacion</title>
        
        <link rel="stylesheet" type="text/css" href="../css/styles.php">
        <meta charset='utf-8' > 

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </head>

    <body id="bodyIndex">
        <?php
                        
            if($_GET['usuario'] == "admin"){
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
            }
        ?>
        <header>     
            
            <a href="index.php?usuario=<?php echo $_GET['usuario']?>">Home</a>
            
            <nav class="menu">

                <?php
                    Header::Menu($_GET['usuario']);                    
                ?>

            </nav>
        </header>

        <section class="home" id="home">
            
            <div class="welcomeTitle">
                <h1>Welcome</h1>            
                <h2 id="mainSubtitle">Thanks you for visiting my WebSite</h2>            
            </div>
            
            <div class="logoTitulo">
                <img src="../imagenes/logo_inicio.png" height="155px" width="155px"/>
            </div>
        </section>        
        
    </body>

</html>
