
function loginSign(seleccionado) {
    let signup = document.getElementById("container-signup")
    let login = document.getElementById("container-login")
    if (seleccionado == "sign") {
        signup.style.display = "flex";
        login.style.display = "none"
    } else {
        login.style.display = "flex";
        signup.style.display = "none"
    }
}


function login() {

}

function signup() {
    let expRegCorreo = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    let expRegPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/
    let expRegPhone = /^(\+34|0034|34)?[6|7|8|9][0-9]{8}$/;
    let nombre = document.getElementById("signup-name").value;
    let apellido = document.getElementById("signup-lastname").value;
    let cumple = document.getElementById("signup-birthday").value;
    let gender = document.getElementById("signup-gender").value;
    let email = document.getElementById("signup-email").value;
    let password = document.getElementById("signup-password").value;
    let politicaPriv = document.getElementById("signup-privacidad").checked;
    let phone = document.getElementById("signup-phone").value;
    let foto = document.getElementById("profImg").value;
    if (nombre != "" && apellido != "" && cumple != "" && gender != "" && email != "" && password != "") {
        if (politicaPriv == true) {
            if (expRegPhone.exec(phone)){
                if (expRegCorreo.exec(email)) {
                    if (expRegPassword.exec(password)) {
                        if (foto.src == "" || foto.src == null){
                            if (gender.toUpperCase() == "MALE"){
                                document.getElementById("profImg").src = "Assets/MEDIA/ImgMujer.jpeg";
                            }else if(gender.toUpperCase() == "FEMALE"){
                                document.getElementById("profImg").src = "Assets/MEDIA/ImgHombre.jpeg";
                            }
                        }
                        let today = new Date();
                        let edad;
                        if (cumple.getMonth() == today.getMonth() && cumple.getDay() == today.getDay()) {
                            edad = today.getFullYear() - cumple.getFullYear()
                        } else if (cumple.getMonth() > today.getMonth()) {
                            edad = today.getFullYear() - cumple.getFullYear() - 1
                        } else if (cumple.getMonth() == today.getMonth() && cumple.getDay() > today.getDay()) {
                            edad = today.getFullYear() - cumple.getFullYear() - 1
                        } else if (cumple.getMonth() == today.getMonth() && cumple.getDay() < today.getDay()) {
                            edad = today.getFullYear() - cumple.getFullYear()
                        } else if (cumple.getMonth() < today.getMonth()) {
                            edad = today.getFullYear() - cumple.getFullYear()
                        }
                        if (edad >= 18) {
                            error("Entra.")
                            return true;
                        }else{
                            error("Solo las personas mayores de 18 años pueden registrarse en esta página.")
                            return false;
                        }
                    } else {
                        error("Por favor, introduzca una contraseña con letras mayúsculas, minúsculas y números.")
                        return false;
                    }
                } else {
                    error("Por favor, introduzca un email válido.")
                    return false;
                }
            }else{
                error("Por favor, introduzca un teléfono válido.")
                return false;
            }
        } else {
            error("Para continuar, debe aceptar la politica de privacidad.")
            return false;
        }
    } else {
        error("Por favor, rellene todos los campos.")
        return false;
    }
}

function error(mensaje) {
console.log(mensaje)
}