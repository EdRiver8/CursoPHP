//permite la visibilidad de la barra de navegacin
window.onscroll = function(){

    scroll = document.documentElement.scrollTop;

    //GetElementById Significa llamar un elemento por un id
    header = document.getElementById("barra-navegacion");

    //Condicional que nos pide una accion (scroll)
    if (scroll > 20){
        header.classList.add('nav_mod');
    }else if (scroll < 20){
        header.classList.remove('nav_mod');
    }
}

//AddEventListener significa que al hacer algo
document.getElementById("btn-menu").addEventListener("click", mostrar_menu);

    //El menu, body y nav se ubicara en la misma etiqueta de donde provenga el id pedido
    menu = document.getElementById("barra-navegacion");
    body = document.getElementById("cont-all");
    nav = document.getElementById("navegador");

    /*Una funcion sin parametros debido a que los parentesis estan*/
function mostrar_menu(){
        //En el body que esta llamado arriba, se le agregara una clase, que tenga la funcion de un toggle (hacer y deshacer) y la clase se llamara con lo que hay entre comillas simples
        body.classList.toggle('move_content');
        menu.classList.toggle('move_content');
        nav.classList.toggle('move_nav');
}

window.addEventListener("resize", function(){
    
    if (window.innerWidth > 760){
        body.classList.remove('move_content');
        menu.classList.remove('move_content');
        nav.classList.remove('move_nav');
    }

});