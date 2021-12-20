let imagen = document.getElementById('imagen');
function disable(){
        let nomImagen = document.getElementById('nomImagen');
        console.log(imagen.value);
        if(imagen.value != ''){
            nomImagen.removeAttribute('disabled');
        } 
        if(imagen.value == null){
            nomImagen.setAttribute('disabled', true);
        } 
      
    }
    imagen.addEventListener('click', disable);