function mostrarSeccion(idSeccion){
    //Ocultar todas las secciones
    var  secciones = document.getElementsByTagName('section');
    for(var i=0; i < secciones.length; i++){
        secciones[i].style.display = 'none';
    }
    //Mostrar la sección seleccionada
    var seccion = document.getElementById(idSeccion);
    seccion.style.display = 'block';
}
function cerrarSesion(event){
    event.preventDefault();
    window.location.replace("../index.html");
}
document.getElementById("btnCerrarSesion").addEventListener("click", cerrarSesion);

