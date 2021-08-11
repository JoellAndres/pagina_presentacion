
//document.getElementById('frm_datos_mensajes').onsubmit = 
function ValidarCamposMensaje() {
    let nombre = document.getElementById('name1').value;
    let apellido = document.getElementById('lastName1').value;
    let email = document.getElementById('email1').value;
    let mensaje = document.getElementById('message1').value;

    let bandera = true;
    
    if(nombre.length == 0){
        document.getElementById('name1').style.backgroundColor = 'Pink';            
        bandera = false;
    }
    else{
        document.getElementById('name1').style.backgroundColor = 'White';   
    }

    if(apellido.length == 0){
        document.getElementById('lastName1').style.backgroundColor = 'Pink';   
        bandera = false;        
    }
    else{
        document.getElementById('lastName1').style.backgroundColor = 'White';  
    }

    if(email.length == 0){
        document.getElementById('email1').style.backgroundColor = 'Pink';           
        bandera = false;
    }
    else{
        document.getElementById('email1').style.backgroundColor = 'White'; 
    }

    if(mensaje.length == 0){
        document.getElementById('message1').style.backgroundColor = 'Pink';           
        bandera = false;
    }
    else{
        document.getElementById('message1').style.backgroundColor = 'White';  
    }

    if(!bandera){
        alert("Es necesario que complete todos los campos")
    }

    return bandera;
}


//document.getElementById('frm_ingresar').onsubmit = 
function ValidarCamposUsuario(){
    let usuario = document.getElementById('usuario').value;
    let clave = document.getElementById('clave').value;  
    
    if(usuario.length == 0 || clave.length == 0){
        alert("Debe completar todos los campos")
        
        return false
    }
    
    return true
}

//document.getElementById('frm_optiones_searching').onsubmit = 
function ValidarOpciones(){
    let bandera = true;
    let valor = document.getElementById('selectSearch').value

    if(valor == "line"){
        bandera = false;
    }
    
    return bandera;
}


function ValidarCampoID(){
    let id = document.getElementById('searchID').value
    let bandera = true

    if(id.length == 0){
        document.getElementById('searchID').style.backgroundColor = 'Pink';   
        bandera = false
    }

    return bandera
}

function ValidarCampoEmail(){
    let id = document.getElementById('searchEmail').value
    let bandera = true

    if(id.length == 0){
        document.getElementById('searchEmail').style.backgroundColor = 'Pink';   
        bandera = false
    }

    return bandera
}

function ValidarCampoApellido(){
    let id = document.getElementById('searchLastName').value
    let bandera = true

    if(id.length == 0){
        document.getElementById('searchLastName').style.backgroundColor = 'Pink';   
        bandera = false
    }

    return bandera
}

function ValidarCamposProyecto(){
    let bandera = true
    let nombre = document.getElementById('nameProject')
    let link = document.getElementById('urlProject')
    let descripcion = document.getElementById('descriptionProject')
    let foto = document.getElementById('formFile')

    if(nombre.value.length == 0){
        bandera = false
        nombre.style.backgroundColor = 'Pink'
    }
    else{
        nombre.style.backgroundColor = 'White'
    }

    if(link.value.length == 0){
        bandera = false
        link.style.backgroundColor = 'Pink'
    }
    else{
        link.style.backgroundColor = 'White'
    }

    if(descripcion.value.length == 0){
        bandera = false
        descripcion.style.backgroundColor = 'Pink'        
    }
    else{
        descripcion.style.backgroundColor = 'White'
    }

    if(foto.value == ""){
        bandera = false
        foto.style.backgroundColor = 'Pink'
    }
    else{
        foto.style.backgroundColor = 'White'
    }

    return bandera
}
