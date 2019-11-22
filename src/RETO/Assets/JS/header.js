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
    let perfil = document.getElementById("irPerfil");
    let cerrarSesion = document.getElementById("cerrarSesionHeader");
    let anunciate = document.getElementById("anunciate");
    console.log(logged)
    if (logged == true){
        login.style.display = "none";
        perfil.style.display = "list-item";
        anunciate.style.display = "list-item";
        cerrarSesion.style.display = "list-item";
    }else{
        login.style.display = "list-item";
        perfil.style.display = "none";
        anunciate.style.display = "none";
        cerrarSesion.style.display = "none";

    }
}