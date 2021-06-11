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
}

.home{
    display: flex;
    align-items: center;
    justify-content: center;    
}

.home .logoTitulo img{
    margin-left: 3.5em;
}

.home .welcomeTitle h1{
    font-size: 4.6rem;
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
.projects{
    padding-top: 4%;
}

.projects #title{
    text-align: center;
}

.projects .listProjects > ul{
  display: flex;
  flex-direction: column;
  align-items: center;
}

/*Fin pagina proyectos*/

/*Pagina de mensajes*/
.msjs{
    text-align: center;
    padding-top: 30px;
}

.msjs .table{
    padding: 25px 150px;
}
/*Fin pagina mensajes*/


/*Color y fuente*/
body,
#bodyIndex,
#bodyContact,
#bodyAbout,
#bodyProjects,
#bodyMessages{    
    background-color: #D3D3D3;
}

.welcome #mainSubtitle,
.datesOfContact #title,
.socialWebs #title{
    color: slategrey;       
}

h1{    
    color: white;
    font-family: 'Libre Franklin', sans-serif;
}

p, a{
    font-family: 'Lexend Giga', sans-serif;
}

/*Fin color y fuente*/