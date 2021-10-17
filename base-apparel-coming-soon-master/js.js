const boton = document.querySelector(".boton");
const datos = document.querySelector(".datos");
boton.addEventListener(function(){
    boton.addEventListener('click', function(){
        if(datos.outerHTML){
            boton.animate(bound);
        }
    })
})