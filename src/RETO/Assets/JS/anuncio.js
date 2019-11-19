function subirAnuncio(){
    let expRegDescripcion = /[0-9a-zA-Z]{20,}/
    let nombre = document.getElementById("nombreProducto").value;
    let direccion = document.getElementById("direccionProducto").value;
    let categoria = document.getElementById("categoriaProducto").value;
    let descripcion = document.getElementById("descrpcionProducto").value;

    if (nombre !="" && direccion!="" && categoria !="" && descripcion != ""){
        if (expRegDescripcion.exec(descripcion)){
            error("Entra.")
            return true;
        }else{
            error("La descripción debe tener como minimo 20 carácteres.")
            return false;
        }
    }else{
        error("Por favor, rellene todos los campos.")
        return false;
    }

}

function error(mensaje) {
    console.log(mensaje)
}