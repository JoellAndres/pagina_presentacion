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

        if(apellido.length == 0){
            document.getElementById('lastName1').style.backgroundColor = 'Pink';   
            bandera = false;        
        }

        if(email.length == 0){
            document.getElementById('email1').style.backgroundColor = 'Pink';           
            bandera = false;
        }

        if(mensaje.length == 0){
            document.getElementById('message1').style.backgroundColor = 'Pink';           
            bandera = false;
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
