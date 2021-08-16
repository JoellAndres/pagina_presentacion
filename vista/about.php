<?php      
    if(!isset($_GET['usuario'])){
        header("location: about.php?usuario=vista");
    }

    require '../controlador/Header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Joel.T | About</title>
        <link rel="stylesheet" type="text/css" href="../css/styles.php">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>

    <body id="bodyAbout">
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
        
        <section class="about" id="about">
            <div class="aboutTitle">
                <h1>
                    About me
                </h1>
            </div>

            <div class="contenidoAbout">
                <p>
                    Hi!, my name is Joel Tuma, I am 20 years old, <br>
                    and I am a programming student (coursing 2th year).<br> 
                    Here you can see projects where I have worked, <br>
                    and get in contact with me. About my tastes? cinema and football.<br><br>
                    
                    <div class="curriculum">
                        <a href="../cv/Curriculum.pdf" target="_blank">
                            <button type="button" class="btn btn-danger">GET CV</button>
                        </a>
                    </div>
                </p>
            </div>
        </section>

        <section class="skills" id="skilss">
            <div class="skillsTitle">
                <h1>
                    My Skills
                </h1>

                <div class="images"> 
                    <div>
                        <img src="../imagenes/logo_html.png" height="155px" width="155px"/>
                        <img src="../imagenes/logo_css.png" height="155px" width="155px"/>
                        <img src="../imagenes/logo_js.png" height="155px" width="155px"/>
                        <img src="../imagenes/logo_php.png" height="82px" width="155px"/>
                    </div>
                    <div>
                        <img src="../imagenes/logo_java.png" height="155px" width="155px"/>
                        <img src="../imagenes/logo_c.png" height="155px" width="155px"/>
                        <img src="../imagenes/logo_python.png" height="155px" width="155px"/>
                    </div>
                </div>
            </div>  

            
        </section>
    </body>

</html>
