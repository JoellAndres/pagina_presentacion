 
function MyFunction(){
    
    //alert("estamos probando")
    //Creamos el formulario
    var FormCambiarClave = document.createElement('form')
    FormCambiarClave.id = 'frm_cambio_clave'
    FormCambiarClave.method = 'POST'
    FormCambiarClave.classList.add('formPass')
    FormCambiarClave.onsubmit = ValidarCamposNuevaClave
    FormCambiarClave.action = "../controlador/update.php"

    // #region Input de usuario
        //Creamos el div para el label y el input
        var Div1 = document.createElement('div')   
        Div1.classList.add('mb-3', 'row') 
        //Creamos el label de usuario
        var labelUsuario = document.createElement('label')
        labelUsuario.textContent = 'Usuario:'
        labelUsuario.htmlFor = '_usuario'
        labelUsuario.classList.add('col-sm-2', 'col-form-label')
        //Creamos div para el input (porque el formulario esta hecho en bootstrap)
        var divInput1 = document.createElement('div')
        divInput1.classList.add('col-sm-10')
        //Creamos el input de usuario
        var inputUsuario = document.createElement('input')
        inputUsuario.type = 'Text'
        inputUsuario.id = '_usuario'
        inputUsuario.name = '_usuario'
        inputUsuario.classList.add('form-control')
        //Agregamos input al div
        divInput1.appendChild(inputUsuario)
        //Agregamos el label y el div con el input
        Div1.appendChild(labelUsuario)
        Div1.appendChild(divInput1)
        //Agregamos el div con el label y el input al formulario
        FormCambiarClave.appendChild(Div1)
    // #endregion

    // #region Input de clave
        //Creamos el div para el label y el input
        var Div2 = document.createElement('div')   
        Div2.classList.add('mb-3', 'row') 
        //Creamos el label de usuario
        var labelClave = document.createElement('label')
        labelClave.textContent = 'Clave:'
        labelClave.htmlFor = '_clave'
        labelClave.classList.add('col-sm-2', 'col-form-label')
        //Creamos div para el input (porque el formulario esta hecho en bootstrap)
        var divInput2 = document.createElement('div')
        divInput2.classList.add('col-sm-10')
        //Creamos el input de usuario
        var inputClave = document.createElement('input')
        inputClave.type = 'Password'
        inputClave.id = '_clave'
        inputClave.name = '_clave'
        inputClave.classList.add('form-control')
        //Agregamos input al div
        divInput2.appendChild(inputClave)
        //Agregamos el label y el div con el input
        Div2.appendChild(labelClave)
        Div2.appendChild(divInput2)
        //Agregamos el div con el label y el input al formulario
        FormCambiarClave.appendChild(Div2)
    // #endregion

    // #region Input de clave nueva
        //Creamos el div para el label y el input
        var Div3 = document.createElement('div')   
        Div3.classList.add('mb-3', 'row') 
        //Creamos el label de usuario
        var labelClaveNueva = document.createElement('label')
        labelClaveNueva.textContent = 'Nueva Clave:'
        labelClaveNueva.htmlFor = '_nuevaClave'
        labelClaveNueva.classList.add('col-sm-2', 'col-form-label')
        labelClaveNueva.id = 'lblNewPass'
        //Creamos div para el input (porque el formulario esta hecho en bootstrap)
        var divInput3 = document.createElement('div')
        divInput3.classList.add('col-sm-10')
        //Creamos el input de usuario
        var inputClaveNueva = document.createElement('input')
        inputClaveNueva.type = 'Password'
        inputClaveNueva.id = '_nuevaClave'
        inputClaveNueva.name = '_nuevaClave'
        inputClaveNueva.classList.add('form-control')
        //Agregamos input al div
        divInput3.appendChild(inputClaveNueva)
        //Agregamos el label y el div con el input
        Div3.appendChild(labelClaveNueva)
        Div3.appendChild(divInput3)
        //Agregamos el div con el label y el input al formulario
        FormCambiarClave.appendChild(Div3)
    // #endregion

    //#region Boton Submit 
        //Creamos y agregamos el boton submmit
        var inputSubmit = document.createElement('button')
        inputSubmit.type = 'Submit'
        inputSubmit.textContent = 'Send'
        inputSubmit.name = 'newPass'
        inputSubmit.classList.add('btn', 'btn-outline-primary')
        FormCambiarClave.appendChild(inputSubmit)
    //#endregion

    console.log(FormCambiarClave)
    console.log(seccion)
    
    //Agrego el formulario al HTML
    var seccion = document.querySelector('.newPass')    
    seccion.appendChild(FormCambiarClave)
    //FormCambiarClave.submit()    
}

function ValidarCamposNuevaClave(){
    let usuario = document.getElementById('_usuario').value;
    let clave = document.getElementById('_clave').value;  
    let nuevaClave = document.getElementById('_nuevaClave').value;  
    let bandera = true

    //#region Validar campo usuario
    if(usuario.length == 0){
        document.getElementById("_usuario").style.backgroundColor = 'Pink'
        bandera = false
    }
    else{
        document.getElementById("_usuario").style.backgroundColor = 'White'
    }
    //#endregion

    //#region Validar campo clave
    if(clave.length == 0){
        document.getElementById("_clave").style.backgroundColor = 'Pink'
        bandera = false
    }
    else{
        document.getElementById("_clave").style.backgroundColor = 'White'
    }
    //#endregion

    //#region Validar campo clave nueva
    if(nuevaClave.length == 0){
        document.getElementById("_nuevaClave").style.backgroundColor = 'Pink'
        bandera = false
    }
    else{
        document.getElementById("_nuevaClave").style.backgroundColor = 'White'
    }
    //#endregion

    return bandera
}


