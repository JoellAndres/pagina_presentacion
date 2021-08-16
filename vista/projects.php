<?php   


    if(!isset($_GET['usuario'])){
        header("location: projects.php?usuario=vista");
    }

    require '../controlador/Header.php';
    require '../read.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Joel.T | Projects</title>
        <link rel="stylesheet" type="text/css" href="../css/styles.php">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta charset="utf-8" >
    </head>
    
    <body id="bodyProjects">
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
                  
            <a href="index.php?usuario=<?php echo$_GET['usuario']?>">Home</a>      
            
            <nav class="menu">

                <?php
                    Header::Menu($_GET['usuario']);                    
                ?>

            </nav>
        </header>

        <section class="_projects" id="_projects">
            <h1 id="title">
                My Projects
            </h1>              

            <?php 
                
                $array_proyectos = MostrarProyecto($_GET['usuario']);
                
                for($i = 0; $i<count($array_proyectos); $i++){
                    
                    echo $array_proyectos[$i];
                    
                }
            ?>
            
        </section>

        <?php if(isset($_GET['usuario'])):?>
            <?php if($_GET['usuario'] == 'admin'):?>
                <div class="btnProject">
                    <a href="subirProject.php"> <button type="button" class="btn btn-primary">Add Project</button></a>
                </div>  
            <?php endif; ?>
        <?php endif; ?>

        <script src="../controlador/scriptProject.js"></script>
        <script src="../controlador/AceptEliminar.js"></script>
    </body>
</html>
