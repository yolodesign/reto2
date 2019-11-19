function validacionesPerfil() {
    let expRegPhone = /^(\+34|0034|34)?[6|7|8|9][0-9]{8}$/;
    let nombre = document.getElementById("profileName").value;
    let apellido = document.getElementById("profileLastname").value;
    let cumple = document.getElementById("profileBirthday").value;
    let gender = document.getElementById("profileGender").value;
    let phone = document.getElementById("profilePhone").value;

    if (nombre != "" && apellido != "" && cumple != "" && gender != "" && phone != "") {
        if (expRegPhone.exec(phone)) {
            let hoy = new Date();
            let edad;
            if (cumple.getMonth() == hoy.getMonth() && cumple.getDay() == hoy.getDay()) {
                edad = hoy.getFullYear() - cumple.getFullYear()
            } else if (cumple.getMonth() > hoy.getMonth()) {
                edad = hoy.getFullYear() - cumple.getFullYear() - 1
            } else if (cumple.getMonth() == hoy.getMonth() && cumple.getDay() > hoy.getDay()) {
                edad = todhoyay.getFullYear() - cumple.getFullYear() - 1
            } else if (cumple.getMonth() == hoy.getMonth() && cumple.getDay() < hoy.getDay()) {
                edad = hoy.getFullYear() - cumple.getFullYear()
            } else if (cumple.getMonth() < hoy.getMonth()) {
                edad = hoy.getFullYear() - cumple.getFullYear()
            }
            if (edad >= 18) {
                error("Entra.")
                return true;
            } else {
                error("Solo las personas mayores de 18 años pueden registrarse en esta página.")
                return false;
            }
        }else{
            error("Por favor, introduzca un teléfono válido.")
            return false;
        }
    }else {
        error("Por favor, rellene todos los campos.")
        return false;
    }
}
function error(mensaje) {
    console.log(mensaje)
}

function editarPerfil(ocultar = true){
    let editar = document.getElementById("perfilDatos").style
    let mostrar = document.getElementById("datos").style
    if (ocultar == true){
        editar.display = "none";
        mostrar.display = "flex";
    } else{
        editar.display = "flex";
        mostrar.display = "none";
    }
}