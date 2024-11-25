// Función para inicializar un slider
function initializeSlider(containerId, autoplaySpeed = 3000) { // autoplaySpeed en milisegundos
    const container = document.getElementById(containerId);
    if (!container) {
        console.error(`Container with ID ${containerId} not found.`);
        return;
    }

    const slider = container.querySelector('.slider');
    const slides = container.querySelectorAll('.slide');
    const prevButton = container.querySelector('.prev');
    const nextButton = container.querySelector('.next');
    const paginationContainer = container.querySelector('.pagination');
    const currentIndexElement = container.querySelector('.current-index');
    const totalSlidesElement = container.querySelector('.total-slides');

    let currentIndex = 0;
    const totalSlides = slides.length;

    // Crear los puntos de paginación dinámicamente
    if (paginationContainer) {
        paginationContainer.innerHTML = '';
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            if (i === currentIndex) {
                dot.classList.add('active');
            }
            paginationContainer.appendChild(dot);
        }

        const dots = paginationContainer.querySelectorAll('.dot');
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateSlider();
            });
        });
    }

    if (totalSlidesElement) {
        totalSlidesElement.textContent = totalSlides;
    }

    function updateSlider() {
        if (slider) {
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        if (paginationContainer) {
            const dots = paginationContainer.querySelectorAll('.dot');
            dots.forEach(dot => dot.classList.remove('active'));
            if (dots[currentIndex]) {
                dots[currentIndex].classList.add('active');
            }
        }

        if (currentIndexElement) {
            currentIndexElement.textContent = currentIndex + 1;
        }
    }

    if (nextButton) {
        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlider();
        });
    }

    if (prevButton) {
        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlider();
        });
    }

    // Función de autoplay
    function startAutoplay() {
        return setInterval(() => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlider();
        }, autoplaySpeed);
    }

    // Iniciar autoplay
    let autoplayInterval = startAutoplay();

    // Pausar autoplay cuando se interactúa con los controles
    if (nextButton) {
        nextButton.addEventListener('click', () => {
            clearInterval(autoplayInterval);
            autoplayInterval = startAutoplay();
        });
    }

    if (prevButton) {
        prevButton.addEventListener('click', () => {
            clearInterval(autoplayInterval);
            autoplayInterval = startAutoplay();
        });
    }

    if (paginationContainer) {
        paginationContainer.querySelectorAll('.dot').forEach(dot => {
            dot.addEventListener('click', () => {
                clearInterval(autoplayInterval);
                autoplayInterval = startAutoplay();
            });
        });
    }

    updateSlider();
}

// Inicializar sliders con autoplay
initializeSlider('slider1', 4000); // 4 segundos de autoplay
initializeSlider('slider2', 4000); // 4 segundos de autoplay
initializeSlider('slider3', 4000); // 4 segundos de autoplay
initializeSlider('slider4', 4000); // 4 segundos de autoplay
initializeSlider('slider5', 4000); // 4 segundos de autoplay

document.querySelectorAll('.video-container').forEach((videoWindow) => {
  const video = videoWindow.querySelector('.videoElement');
  const closeBtn = videoWindow.querySelector('.closeBtn');
  const maximizeBtn = videoWindow.querySelector('.maximizeBtn');

  let isDragging = false;
  let offsetX, offsetY;

  // Función para generar una posición aleatoria sin solapamiento
  const generateRandomPosition = () => {
    const padding = 20; // Espacio entre los videos y los bordes de la pantalla
    const maxLeft = window.innerWidth - videoWindow.offsetWidth - padding;
    const maxTop = window.innerHeight - videoWindow.offsetHeight - padding;

    const randomLeft = Math.floor(Math.random() * maxLeft);
    const randomTop = Math.floor(Math.random() * maxTop);

    return { left: randomLeft, top: randomTop };
  };

  // Aplicar la posición aleatoria inicial al video
  const { left, top } = generateRandomPosition();
  videoWindow.style.left = `${left}px`;
  videoWindow.style.top = `${top}px`;

  // Configurar loop para el video
  video.loop = true; // Esto hará que el video vuelva a empezar automáticamente

  // Autoplay con muted para asegurarse de que funcione en móviles
  video.muted = true;  // Necesario para que el autoplay funcione en móviles
  video.play();

  // Función para iniciar el arrastre con el mouse
  videoWindow.addEventListener('mousedown', (e) => {
    isDragging = true;
    offsetX = e.clientX - videoWindow.offsetLeft;
    offsetY = e.clientY - videoWindow.offsetTop;

    // Desactivar la selección de texto al arrastrar
    document.body.style.userSelect = 'none';
    e.preventDefault();
  });

  // Función para iniciar el arrastre en dispositivos táctiles
  videoWindow.addEventListener('touchstart', (e) => {
    isDragging = true;
    const touch = e.touches[0];
    offsetX = touch.clientX - videoWindow.offsetLeft;
    offsetY = touch.clientY - videoWindow.offsetTop;

    document.body.style.userSelect = 'none';
    e.preventDefault();
  });

  // Función para mover el video con el mouse
  document.addEventListener('mousemove', (e) => {
    if (isDragging) {
      const newX = e.clientX - offsetX;
      const newY = e.clientY - offsetY;

      // Mover el video libremente sin restricciones de la pantalla
      videoWindow.style.left = `${newX}px`;
      videoWindow.style.top = `${newY}px`;
    }
  });

  // Función para mover el video en dispositivos táctiles
  document.addEventListener('touchmove', (e) => {
    if (isDragging) {
      const touch = e.touches[0];
      const newX = touch.clientX - offsetX;
      const newY = touch.clientY - offsetY;

      // Mover el video libremente sin restricciones de la pantalla
      videoWindow.style.left = `${newX}px`;
      videoWindow.style.top = `${newY}px`;

      e.preventDefault();
    }
  });

  // Finalizar el arrastre con el mouse
  document.addEventListener('mouseup', () => {
    isDragging = false;
    document.body.style.userSelect = 'auto';
  });

  // Finalizar el arrastre en dispositivos táctiles
  document.addEventListener('touchend', () => {
    isDragging = false;
    document.body.style.userSelect = 'auto';
  });

  // Ocultar el video cuando se presiona el botón de cerrar
  closeBtn.addEventListener('click', () => {
    video.style.display = 'none';
  });

  // Mostrar el video cuando se presiona el botón de maximizar
  maximizeBtn.addEventListener('click', () => {
    video.style.display = 'block';
    video.play();
  });

  // Habilitar play/pause en móviles sin interferencia
  video.addEventListener('touchstart', (e) => {
    if (!isDragging) {
      video.paused ? video.play() : video.pause();
    }
    e.stopPropagation(); // Evitar interferencias con el arrastre
  });

  // Eventos touch para móviles
  maximizeBtn.addEventListener('touchstart', (e) => {
    e.preventDefault();
    video.style.display = 'block';
    video.play();
  });

  closeBtn.addEventListener('touchstart', (e) => {
    e.preventDefault();
    video.style.display = 'none';
  });
});
