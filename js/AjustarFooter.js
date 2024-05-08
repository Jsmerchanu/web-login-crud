// Llama a la función cuando el contenido HTML de la página se haya cargado completamente
function footer(){
    document.addEventListener('DOMContentLoaded', function() {
        adjustFooterPosition();
    });
}

function adjustFooterPosition() {
    var content = document.querySelector('.content');
    var footer = document.querySelector('#footer');
    
    var contentHeight = content.offsetHeight;
    var windowHeight = window.innerHeight;
    
    if (contentHeight < windowHeight) {
        footer.style.position = 'relative';
        footer.style.bottom = '0';
    } else {
        footer.style.position = 'relative';
    }
}

// Llama a la función una vez al cargar la página
//window.onload = adjustFooterPosition;

// Llama a la función cada vez que se redimensiona la ventana del navegador
window.addEventListener('resize', adjustFooterPosition);