function visualizarMenu() {
    var div_menu = document.getElementById("menu_desplegable");

    if(div_menu.style.display=='none') {
        div_menu.style.display='flex';
        console.log("Esto deberia mostrar el menu");
    }else{
        div_menu.style.display='none';
        console.log("Esto deberia ocultar el menu");
    }
}
function loggeado(logged){
    let login = document.getElementById("loginHead");
    let cerrarSesion = document.getElementById("cerrarSesionHeader");
    let anunciate = document.getElementById("anunciate");
    if (logged == true){
        login.style.display = "none";
        anunciate.href = "SubirAnuncio.php";
        cerrarSesion.style.display = "list-item";
    }else{
        login.style.display = "list-item";
        anunciate.href = "Login.php";
        cerrarSesion.style.display = "none";
        console.log(logged)
    }
}