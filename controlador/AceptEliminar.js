function EliminarMensaje(idAEliminar){
    var opcion = confirm("Desea eliminar el mensaje?");
    if (opcion == true) {
        window.location = "../controlador/delete.php?id="+idAEliminar+"&aEliminar=mensaje"
	}
}

function EliminarProyecto(id){
    var op = confirm("Desea eliminar el proyecto?"+id);
    if (op == true) {
        window.location = "../controlador/delete.php?id_proyecto="+id+"&aEliminar=proyecto"
	}
}

function CerrarSesion(){
    var opc = confirm("Do you want to log out?");
    if (opc == true) {
        window.location = "../controlador/cerrar_sesion.php"
	}
}