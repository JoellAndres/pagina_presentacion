<?php
    include('insert.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Joel T. | Contact Me</title>
        <meta charset='utf-8' > 

        <link rel="stylesheet" href="styles.php">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
    </head>

    <body id="bodyContact">
        <header>            
            <a href="index.php" class="logo">Home</a>          
            
            <nav class="menu">
                <a href="about.html">About Me</a>
                <a href="projects.html">My Projects</a>
                <a href="contact.php">Contact</a>                
            </nav>
        </header>

        <section class="contact" id="contact">
            <div>
                <h1>Contact Me</h1>
            </div>
            

            <div class="datesOfContact">
                <h2 id="title">
                    Leave a message
                </h2>            
                
                <form  id="frm_datos_mensajes" action="" method="POST" onsubmit="return ValidarCamposMensaje()">

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
                Social Webs
            </h2>

            <div class="redes">
                <a href="https://www.linkedin.com/in/joel-tuma-b1b3b21b9/" target="_blank"> <img src="imagenes/logo_linkedin.png" height="73px" width="130px"/> </a>      
                <a href="https://github.com/JoellAndres" target="_blank"> <img src="imagenes/logo_git.png" height="73px" width="75px"/> </a>
            </div>
        </section>

        <div>
            <a href="vistaUsuario.php"> <button type="button" class="btn btn-outline-primary">See Messages</button></a>
        </div>

        <script src="Usuario.js"></script>
    </body>
</html>