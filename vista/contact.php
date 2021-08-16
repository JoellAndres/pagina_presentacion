<?php      
    if(!isset($_GET['usuario'])){
        header("location: contact.php?usuario=vista");
    }

    require '../controlador/Header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Joel T. | Contact Me</title>
        <meta charset='utf-8' > 

        <link rel="stylesheet" type="text/css" href="../css/styles.php">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
    </head>

    <body id="bodyContact">
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
        
        <section class="contact" id="contact">
            
            <h1>Contact Me</h1>         
            

            <div class="datesOfContact">
                <h2 id="title">
                    <strong>Leave a message</strong>
                </h2>            
                
                <form  id="frm_datos_mensajes" action="../controlador/insert.php" method="POST" onsubmit="return ValidarCamposMensaje()">

                    <div class="input-group">
                        <span class="input-group-text">First and last name</span>
                        <input type="text" id="name1" name="name1" aria-label="First name" class="form-control">
                        <input type="text" id="lastName1" name="lastName1" aria-label="Last name" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" id="email1" name="email1" class="form-control" placeholder="Your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-text">Your Message</span>
                        <textarea class="form-control" aria-label="With textarea" id="message1" name="message1"></textarea>
                    </div>                    
                    
                    <button type="submit" name="alta" class="btn btn-outline-primary btn-lg">Send</button>
                </form>
            </div>
        </section>

        <section class="socialWebs" id="socialWebs">
            <h2 id="title">
                <strong>Social Webs</strong>
            </h2>

            <div class="redes">
                <a href="https://www.linkedin.com/in/joel-tuma-b1b3b21b9/" target="__blank"> <img src="../imagenes/logo__linkedin.png" height="75px" width="75px"/></a>
                <a href="https://github.com/JoellAndres" target="_blank"> <img src="../imagenes/logo__git.png" height="100px" width="100px"/> </a>
            </div>
        </section>

        <?php if(isset($_GET['usuario'])):?>
            <?php if($_GET['usuario'] == 'admin'):?>
                <div>
                    <a href="verMensajes.php"> <button type="button" class="btn btn-primary">See Messages</button></a>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        
        <script src="../controlador/Validacion.js"></script>
    </body>
</html>