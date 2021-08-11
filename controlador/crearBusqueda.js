function CrearFormBusqueda(){
    var opcSelect = document.getElementById('selectSearch')
    let formBuscarMensaje = document.createElement('form')
    formBuscarMensaje.id = 'frm_buscar_mensaje'
    formBuscarMensaje.method = 'POST'
    formBuscarMensaje.onsubmit = function ValidarCampo(){
        let input
        let bandera = true

        if(opcSelect.value == 'id'){
            input = document.getElementById('searchID')            
        }
        else if(opcSelect.value == 'email'){
            input = document.getElementById('searchEmail')
        }
        else if(opcSelect.value == 'lastName'){
            input = document.getElementById('searchLastName')
        }

        if(input.value.length == 0){
            bandera = false
            input.style.backgroundColor = 'Pink'
        }
        else{
            input.style.backgroundColor = 'White'
        }

        return bandera 
    }

    let formulario = document.getElementById('frm_buscar_mensaje')

    if(formulario != null){
        formulario.remove()
    }

    if(opcSelect.value == 'id'){
        //console.log("Buscar por id")
        let inputId = document.createElement('input')
        inputId.type = 'number'
        inputId.placeholder = "Type the ID"
        inputId.id = 'searchID'
        inputId.name = 'searchID'
        inputId.classList.add('form-control')
        inputId.style.width = "200px"
        inputId.style.textAlignLast = "center"
        inputId.style.marginLeft = "43%"
        formBuscarMensaje.appendChild(inputId)
    }
    else if(opcSelect.value == 'email'){
        //console.log("Buscar por email")
        let inputEmail = document.createElement('input')
        inputEmail.type = 'Text'
        inputEmail.placeholder = "Type the Email"
        inputEmail.id = 'searchEmail'
        inputEmail.name = 'searchEmail'
        inputEmail.classList.add('form-control')
        inputEmail.style.width = "200px"
        inputEmail.style.textAlignLast = "center"
        inputEmail.style.marginLeft = "43%"
        formBuscarMensaje.appendChild(inputEmail)
    }
    else if(opcSelect.value == 'lastName'){
        //console.log("Buscar por apellido")
        let inputApellido = document.createElement('input')
        inputApellido.type = 'Text'
        inputApellido.placeholder = "Type the Last Name"
        inputApellido.id = 'searchLastName'
        inputApellido.name = 'searchLastName'
        inputApellido.classList.add('form-control')
        inputApellido.style.width = "200px"
        inputApellido.style.textAlignLast = "center"
        inputApellido.style.marginLeft = "43%"
        formBuscarMensaje.appendChild(inputApellido)
    }
    else if(opcSelect.value == 'everyMessages'){
        //console.log("Mostrar todos los mensajes")
        window.location = "../vista/mostrar.php"
    }

    formBuscarMensaje.appendChild(document.createElement('br'))

    let submit = document.createElement('button')
    submit.type = 'Submit'
    submit.textContent = 'Send'
    submit.classList.add('btn', 'btn-primary')
    formBuscarMensaje.appendChild(submit)

    

    if((opcSelect.value != 'line') && (opcSelect.value != 'everyMessages')){
        let seccion = document.querySelector('.formBuscar')
        console.log(seccion)
        seccion.appendChild(formBuscarMensaje)
    }
    
    //console.log(formBuscarMesaje)  
}

