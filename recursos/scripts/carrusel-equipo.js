document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('slider-equipo');
    const imagenes = document.querySelectorAll('.imagen-slider');
    const btnAnterior = document.getElementById('btn-anterior');
    const btnSiguiente = document.getElementById('btn-siguiente');
    
    const imagenesOriginales = imagenes.length / 3; // Dividir entre 3 porque duplicamos 3 veces
    let indiceActual = imagenesOriginales; // Empezar en el segundo conjunto
    const totalImagenes = imagenes.length;
    
    function actualizarSlider(conTransicion = true) {
        // Primero actualizar los estilos de todas las imágenes
        imagenes.forEach((imagen, index) => {
            // Controlar la transición de cada imagen
            if (conTransicion) {
                imagen.style.transition = 'all 0.5s ease-in-out';
            } else {
                imagen.style.transition = 'none';
            }
            
            // Obtener la URL de la imagen de fondo
            const urlMatch = imagen.style.background.match(/url\((['"]?)(.+?)\1\)/);
            const imagenUrl = urlMatch ? urlMatch[2] : '';
            
            if (index === indiceActual) {
                // Imagen activa: grande y sin filtro
                imagen.classList.remove('filtro-azul', 'w-[208px]', 'h-[283px]', 'opacity-0');
                imagen.classList.add('imagen-activa', 'w-[325px]', 'h-[425px]');
                imagen.style.opacity = '1';
                imagen.style.background = `url(${imagenUrl}) lightgray 50% / cover no-repeat`;
            } else if (index === indiceActual - 1) {
                // Imagen anterior a la activa: oculta
                imagen.classList.remove('imagen-activa', 'w-[325px]', 'h-[425px]');
                imagen.classList.add('filtro-azul', 'w-[208px]', 'h-[283px]', 'opacity-0');
                imagen.style.opacity = '0';
                imagen.style.background = `linear-gradient(0deg, rgba(40, 45, 125, 0.37) 0%, rgba(40, 45, 125, 0.37) 100%), linear-gradient(0deg, #282D7D 0%, #282D7D 100%), linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), url(${imagenUrl}) lightgray 50% / cover no-repeat`;
                imagen.style.backgroundBlendMode = 'multiply, color, normal, normal';
            } else {
                // Imágenes inactivas: pequeñas y con filtro
                imagen.classList.remove('imagen-activa', 'w-[325px]', 'h-[425px]', 'opacity-0');
                imagen.classList.add('filtro-azul', 'w-[208px]', 'h-[283px]');
                imagen.style.opacity = '1';
                imagen.style.background = `linear-gradient(0deg, rgba(40, 45, 125, 0.37) 0%, rgba(40, 45, 125, 0.37) 100%), linear-gradient(0deg, #282D7D 0%, #282D7D 100%), linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), url(${imagenUrl}) lightgray 50% / cover no-repeat`;
                imagen.style.backgroundBlendMode = 'multiply, color, normal, normal';
            }
        });
        
        // Luego calcular el desplazamiento con los tamaños actualizados
        let desplazamiento = 0;
        for (let i = 0; i < indiceActual; i++) {
            const ancho = imagenes[i].classList.contains('imagen-activa') ? 325 : 208;
            desplazamiento += ancho + 20; // 20px es el gap
        }
        
        // Aplicar o quitar transición del slider
        if (conTransicion) {
            slider.style.transition = 'transform 0.5s ease-in-out';
        } else {
            slider.style.transition = 'none';
        }
        
        // Aplicar el desplazamiento
        slider.style.transform = `translateX(-${desplazamiento}px)`;
        
        // Restaurar las transiciones después de un frame si se quitaron
        if (!conTransicion) {
            requestAnimationFrame(() => {
                slider.style.transition = 'transform 0.5s ease-in-out';
                imagenes.forEach(imagen => {
                    imagen.style.transition = 'all 0.5s ease-in-out';
                });
            });
        }
    }
    
    function verificarYReiniciar() {
        // Si llegamos al final del segundo conjunto, saltar al inicio del segundo conjunto
        if (indiceActual >= imagenesOriginales * 2) {
            setTimeout(() => {
                indiceActual = imagenesOriginales;
                actualizarSlider(false);
                // Forzar un reflow para asegurar que la transición se desactive
                slider.offsetHeight;
            }, 500);
        }
        // Si llegamos al inicio del segundo conjunto, saltar al final del segundo conjunto
        else if (indiceActual < imagenesOriginales) {
            setTimeout(() => {
                indiceActual = imagenesOriginales * 2 - 1;
                actualizarSlider(false);
                // Forzar un reflow para asegurar que la transición se desactive
                slider.offsetHeight;
            }, 500);
        }
    }
    
    // Event listener para el botón siguiente
    btnSiguiente.addEventListener('click', function() {
        indiceActual++;
        actualizarSlider(true);
        verificarYReiniciar();
    });
    
    // Event listener para el botón anterior
    btnAnterior.addEventListener('click', function() {
        indiceActual--;
        actualizarSlider(true);
        verificarYReiniciar();
    });
    
    // Inicializar el slider
    actualizarSlider(false);
});
