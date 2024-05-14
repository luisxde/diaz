let form = document.querySelector('.formulario_registro');
let progressOpcion = document.querySelectorAll('.progresbar_opcion');

form.addEventListener('click', function(e){
    let elemento=e.target;
    let siguiente = elemento.classList.contains("paso_boton--siguiente");
    let anterior = elemento.classList.contains("paso_boton--regresa");
    if (siguiente || anterior){
        let actual=document.getElementById('paso-' + elemento.dataset.step);
         let pasosiguiente=document.getElementById('paso-' + elemento.dataset.to_step);
        actual.addEventListener('animationend', function callback(){
            actual.classList.remove('active');
            pasosiguiente.classList.add('active');
            if (siguiente){
                actual.classList.add('to-left');
                progressOpcion[elemento.dataset.to_step-1].classList.add('active');
             }else {
                pasosiguiente.classList.remove('to-left');
                progressOpcion[elemento.dataset.to_step].classList.remove('active');
                
            }
            actual.removeEventListener('animationend', callback);
        });
        actual.classList.add('inactive');
        pasosiguiente.classList.remove('inactive');
        document.addEventListener("DOMContentLoaded", function() {
            const backButton = document.querySelector('.back-to-top');
            backButton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
        
    }
});