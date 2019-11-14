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