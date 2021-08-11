<?php
    header("Content-Type: text/css; charset: UTF-8");
?>

@import url('https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@1,300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lexend+Giga&display=swap');


/*Menu*/

header{    
    top: 0;
    left: 0;
    width: 100%;    
    background-color: whitesmoke;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    padding: 2rem 9%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
}

header a{
    text-decoration:none;
}

header .menu a{
    margin-left: 2rem;
}

/*FIn Menu*/


/*pagina principal (home)*/
.home{
    min-height:100vh;
    padding: 0 9%;
    paddint-top: 7.5rem;
    padding-bottom: 2rem;     
    display: flex;
    align-items: center;
    justify-content: center;     
}

.home{
    padding-bottom: 10.5%;
}

.home .logoTitulo img{
    margin-left: 3.5em;
}

.home .welcomeTitle h1{
    font-size: 4.6rem;
    color: white;
}
.home .welcomeTitle h2{
    font-size: 2.8rem;
}

.images img{
    margin: 1em;
}

/*Fin pagina principal (home) */

/* Pagina about*/

.about{
    text-align: center;
    padding-top: 5%;
}

.skills{
    text-align: center;
    padding-top: 5%;
}
/*Fin pagina about */


/*Pagina de contacto */
.contact{
    text-align: center;
    padding-top: 4%
}

.socialWebs{
    text-align: center;
    padding-top: 3%;
}

.socialWebs .redes img{
    margin-left: 1em;
}
.contact .datesOfContact form{
    padding: 1% 25% 1% 25%;
}

.contact .datesOfContact form .input-group{
    margin-bottom: 1rem;
}

.contact .datesOfContact form button{
    margin-top: 1rem;
}
/*Fin pagina de contacto*/


/*Pagina proyectos*/
._projects{
    padding-top: 4%;
}

._projects #title{
    text-align: center;
}

._projects .listProjects > ul{
  display: flex;
  flex-direction: column;
  align-items: center;
}

.btnProject{
    margin-top: 28%;
}

.contenedor-proyecto{
    position: relative;
    display: inline-block;
    text-align: center;
    margin-left: 34%;
    margin: 1%;
    margin-top: 5%;
}

.link-git{
    position: absolute;
    top: 75%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.titulo-proyecto{
    position: absolute;
    top: -25px;
    right: 10px;
    width: 400px;
    margin-right: 2%;
    color: grey;
    background-color: whitesmoke;
    border-style: solid;
    border-widht: 2px;
    border-radius: 20px;
}

.descripcion-proyecto{
    position: absolute;
    top: 90%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.delete-proyecto{
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
}

/*Fin pagina proyectos*/

/*Pagina subir proyecto */
#frm_proyecto{
    margin-top: 2%;
    padding-right: 22%;     
    padding-left: 22%; 
    text-align: center;                                
}

#frm_proyecto .form-label{
    padding-right: 83%;
}

#frm_proyecto button{
    margin-top: 2%;
}

.titleP{
    text-align: center;
    margin-top: 2%;
}
/*Fin subir proyecto */

/*Inicio ventana descripcion proyecto */

/*Fin pagina descripcion proyecto */

/*Pagina de mensajes*/
.msjs{
    text-align: center;
    padding-top: 30px;
}

.options{
    text-align-last: center;
    width: 570px;
    padding-left: 15%;
    margin-left: 22%;
}

.msjs .table, .table{
    padding: 25px 150px;
}


/*Fin pagina mensajes*/

/*Pagina de mensajes enviados */
.msjRecibido{
    text-align: center;
}

.msjRecibido h1{
    font-size: 3rem;
}

.msjRecibido img{
    margin-top: 1.3%;
    margin-bottom: 3%;
}

.msjRecibido .backHome{
    margin-top: 1%;
    font-size: 1.3rem;
}
/*Fin mensajes recibidos*/

/*Ingreso usuario*/
.bodyUser{
    text-align: center;
}

#userTitle{
    margin-top: 3%;
    font-size: 2.9rem;
}

.formUser, .formPass{
    margin-left: 35%;
    margin-right: 35%;
    margin-top: 2.5%;
}

.formUser label, .formPass label{
    margin-right: 5%;
}

#lblNewPass{
    width: 124px;
}

.formUser button, .formPass button{
    margin-right: 20%;
    margin-top: 5%;
}

#btnNewPass{
    margin-right: 5%;
}

.back{
    margin-top: 3%;
    text-align: justify;
    margin-left: 1%;
}

.warning{
    text-align: center;
    background-color: pink;
    color: #8B0000;
    border-width: 2px;
    border-style: solid;
    border-color: #8B0000;
    margin-top: 2%;
    margin-left: 35%;
    margin-right: 40%;
    padding-bottom: 0.1%;
    padding-top: 0.2%;
    border-radius: 20px;
}

.succes{
    text-align: center;
    background-color: #90EE90;
    color: green;
    border-width: 2px;
    border-style: solid;
    border-color: green;
    margin-top: 2%;
    margin-left: 35%;
    margin-right: 40%;
    padding-bottom: 0.1%;
    padding-top: 0.2%;
    border-radius: 20px;
}
/*Fin ingreso usuario*/

.unaccess{
    text-align: center;
    margin-top: 5%;
}

/*Color y fuente*/
body{      
    background: url(../imagenes/fondo.png) no-repeat;   
    background-size: cover;
}

.welcome #mainSubtitle,
.datesOfContact #title,
.socialWebs #title{
    color: slategrey;       
}

section h1, h1{    
    color: white;
    font-family: 'Libre Franklin', sans-serif;
    font-size: 3.5rem;
    text-shadow: 2px 2px 2px grey;
}


p, a{
    font-family: 'Lexend Giga', sans-serif;
}

/*Fin color y fuente*/

.paginacion{
    text-align: center;
    padding-left: 30%;
}

.trash{
    background-color: white;
}

#btnLogOut{
    margin-left: 2rem;
}