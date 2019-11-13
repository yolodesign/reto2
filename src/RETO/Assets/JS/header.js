function menuOcultar() {
    let menu = document.getElementById("menuDesp")
    if (menu.style.display == "flex") {
        menu.style.display = "none"
    } else {
        menu.style.display = "flex";
        menu.style.visibility = "visible";
    }
}