function validacionesPerfil() {
    let expRegPhone = /^(\+34|0034|34)?[6|7|8|9][0-9]{8}$/;
    let nombre = document.getElementById("profileName").value;
    let apellido = document.getElementById("profileLastname").value;
    let cumple = document.getElementById("profileBirthday").value;
    let gender = document.getElementById("profileGender").value;
    let phone = document.getElementById("profilePhone").value;

    if (nombre != "" && apellido != "" && cumple != "" && gender != "" && phone != "") {
        if (expRegPhone.exec(phone)) {
            let today = new Date();
            let edad;
            //let cumple = new Date(cumple);
            //alert(cumple.getMonth() + " " + today.getMonth());
            let partesCumple =cumple.split("-");
            let myDate = new Date(partesCumple[0]-0, partesCumple[1]-1, partesCumple[2]-0);
            if (myDate.getMonth() == myDate.getMonth() && myDate.getDay() == today.getDay()) {
                edad = today.getFullYear() - myDate.getFullYear()
            } else if (myDate.getMonth() > today.getMonth()) {
                edad = today.getFullYear() - myDate.getFullYear() - 1
            } else if (myDate.getMonth() == today.getMonth() && myDate.getDay() > today.getDay()) {
                edad = today.getFullYear() - cumple.getFullYear() - 1
                alert(edad);
            } else if (myDate.getMonth() == today.getMonth() && myDate.getDay() < today.getDay()) {
                edad = today.getFullYear() - myDate.getFullYear()
            } else if (myDate.getMonth() < today.getMonth()) {
                edad = today.getFullYear() - myDate.getFullYear()
            }else{
                edad = today.getFullYear() - myDate.getFullYear()
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

function editarPerfil(ocultar){
    let editarP = document.getElementById("updatePerfil").style
    let anuncios = document.getElementById("tusAnuncios").style
    if (ocultar == true){
        editarP.display = "none";
        anuncios.display = "block";
    } else{
        editarP.display = "flex";
        anuncios.display = "none";
    }
}