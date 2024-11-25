<!doctype html>

<html>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/98.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>



    <!-- HEADER -->

    <div class="container mx-auto container-custom">

        <header>

            <div class="buttons flex justify-center">

                <div class="flex w-full max-w-md justify-between"> <!-- Limita el ancho para centrar correctamente -->

                    <a href="studio.php" class="flex-1 text-center bg-white hover:bg-gray-200 transition-all  header-nav">

                        <div>STUDIO</div>

                    </a>

                    <a href="products.php" class="flex-1 text-center  bg-white hover:bg-gray-200 transition-all border underline header-nav">

                        <div>PRODUCTS</div>

                    </a>

                    <a href="artwork.php" class="flex-1 text-center  bg-white hover:bg-gray-200 transition-all  header-nav">

                        <div>ARTWORK</div>

                    </a>

                </div>

            </div>

        </header>


        <!-- HERO SECTION -->

        <a href="index.php">
            <div class="slide-romeo">
                <img src="assets/img/ROMEO SOSA IZQ negro.webp">
            </div>
        </a>
        <div class="flex ig-head ig-headhome ">

            <p class="font-bold text-xs text-hero  text-studio-romeo"><a href="https://www.instagram.com/romeososaig/">@ROMEOSOSAIG </a></p>

            <p class="text-gray text-xs text-place">BUENOS AIRES, ARGENTINA</p>

        </div>



        <div class="window video-container" id="videoWindow4">
            <div class="title-bar">
                <div class="title-bar-text">studio.mp4</div>
                <div class="title-bar-controls">

                    <button class="maximizeBtn" aria-label="Maximize"></button>
                    <button class="closeBtn" aria-label="Close"></button>
                </div>
            </div>
            <div class="window-body" id="windowBody1">
                <video controls style="width: 100%;" class="videoElement">
                    <source src="assets/img/video-6.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <div class="window video-container" id="videoWindow5">
            <div class="title-bar">
                <div class="title-bar-text">studio (2).mp4</div>
                <div class="title-bar-controls">

                    <button class="maximizeBtn" aria-label="Maximize"></button>
                    <button class="closeBtn" aria-label="Close"></button>
                </div>
            </div>
            <div class="window-body" id="windowBody2">
                <video controls style="width: 100%;" class="videoElement">
                    <source src="assets/img/video-7.mp4" type="video/mp4">
                </video>
            </div>
        </div>

        <!----PRODUCTS----->

        <!-- CARDS SECTION -->


        <div class="text-home text-products text-home-2">

            <div class="">

                <!-- Box 1 -->

                <div class="container text-container mb-4 md:mb-0">

                    <p>Creemos que el buen diseño apunta siempre al bienestar, entendiendo que la calidad y funcionalidad son los pilares fundamentales para lograr este objetivo.
                        No se trata únicamente de crear objetos visualmente atractivos, sino de diseñar productos que se adapten a la vida cotidiana, mejorando la experiencia
                        del usuario de manera tangible.</p>

                </div>

                <!-- Box 2 -->

                <div class="container text-left text-container text-container-2 relative mb-4 md:mb-0">

                    <p>
                        El buen diseño debe ser capaz de combinar belleza y practicidad, ofreciendo soluciones que perduren en el tiempo y enriquezcan
                        la relación entre las personas y los espacios que habitan.


                    </p>

                </div>

                <!-- Box 3 -->

                <div class="container text-left text-container text-container-1 relative">

                    <p>

                        A través de un enfoque detallado y minucioso, buscamos que cada pieza no solo cumpla con su propósito,
                        sino que también genere un impacto emocional, conectando al usuario con la esencia del producto de manera profunda y significativa.

                        Por eso diseñamos y desarrollamos todos los procesos de nuestros productos articulando la esencia del
                        oficio artesanal con la tecnología actual para lograr el gesto más contemporáneo del diseño industrial.

                    </p>

                </div>

            </div>

        </div>



        <div class="text-chairs flex">

            <a href="products.php">PRODUCTS <br> CHAIRS</a>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="16" height="16" class="size-6 arrow mb-3">

                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />

            </svg>

        </div>



        <div class="grid-products">

            <div class="card-container">

                <a href="/productos/eslabonas.php">
                    <img src="assets/img/products/img-1.webp" alt="Product 1" class="h-auto" loading="lazy">
                </a>

                <div class="button-products"><a href="products.php">PRODUCTS</a></div>

                <div class="card-text-container  text-studio-romeo">

                    <a href="/productos/eslabonas.php">SILLA</a>

                    <a href="/productos/eslabonas.php" class="text-gray">ESLABONA</a>

                </div>

            </div>

            <div class="card-container">

                <img src="assets/img/products/img-2.webp" alt="Product 2" class="h-auto" loading="lazy">

                <div class="button-products"><a href="products.php">PRODUCTS</a></div>

                <div class="card-text-container  text-studio-romeo">



                    <a href="" class="">SILLA</a>

                    <a href="" class="text-gray">VISIBLE</a>

                </div>

            </div>

            <div class="card-container">

                <img src="assets/img/products/img-3.webp" alt="Product 3" class="h-auto" loading="lazy">

                <div class="button-products"><a href="products.php">PRODUCTS</a></div>

                <div class="card-text-container text-studio-romeo">

                    <a href="">BANQUETA</a>
                    <a href="" class="text-gray">BEZEL</a>



                </div>

            </div>

        </div>


        <!----PRODUCTS----->

        <!-- CARDS SECTION -->


        <div class="text-home text-products text-home-2">

            <div class="">

                <!-- Box 1 -->

                <div class="container text-container mb-4 md:mb-0">

                    <p> Cada etapa del proceso creativo, desde la elección de los materiales hasta la fabricación
                        final, está pensada para mantener un equilibrio entre lo tradicional y lo moderno. Creemos
                        firmemente en la integración de técnicas artesanales que respetan el pasado, mientras adoptamos la innovación
                        tecnológica para ofrecer productos que reflejen el presente y anticipen el futuro. De esta manera, nos aseguramos de que cada
                        creación no solo sea una expresión de diseño, sino una verdadera fusión de arte, técnica y funcionalidad en perfecta armonía.
                    </p>

                </div>

            </div>

        </div>





        <div class="">

            <!-- CARDS SECTION -->


            <div>

                <div class="text-chairs flex">

                </div>

                <div class="grid-products">

                    <div class="card-container">

                        <img src="assets/img/products/img-4.webp" alt="Product 1" class="h-auto" loading="lazy">

                        <div class="button-products"><a href="products.php">PRODUCTS</a></div>

                        <div class="card-text-container  text-studio-romeo">

                            <a href="">SOFA</a>

                            <a href="" class="text-gray">BEZEL</a>

                        </div>

                    </div>

                    <div class="card-container">
                        <a href="/productos/seta.php">
                            <img src="assets/img/products/img-5.webp" alt="Product 2" class="h-auto" loading="lazy">
                        </a>
                        <div class="button-products"><a href="products.php">PRODUCTS</a></div>

                        <div class="card-text-container  text-studio-romeo">

                            <a href="/productos/seta.php">POLTRONA</a>

                            <a href="/productos/seta.php" class="text-gray">SETA</a>

                        </div>

                    </div>

                    <div class="card-container">
                        <a href="/productos/teoria.php">
                            <img src="assets/img/products/img-6.webp" alt="Product 3" class="h-auto" loading="lazy">
                        </a>
                        <div class="button-products"><a href="products.php">PRODUCTS</a></div>

                        <div class="card-text-container  text-studio-romeo">

                            <a href="/productos/teoria.php">SOFA</a>

                            <a href="/productos/teoria.php" class="text-gray">TEORIA DE LA BURBUJA</a>

                        </div>

                    </div>

                </div>

            </div>



            <!-- TEXT-HOME SECTION -->

            <div class="text-home text-artwork">

                <div class="">

                    <div class="container text-container mb-4 md:mb-0">

                        <p>
                            Siempre apelamos a alguna ficción para salirnos de nosotros mismos por un rato y construir sentido. Construir ese “algo más” q usualmente decimos q hay detrás de lo q hacemos, una excusa… 
                            El acontecimiento es lo q hace q el sentido sea posible, el hacer, que siempre es mejor que no hacer.</p>

                    </div>

                    <div class="container text-left text-container text-container-2 relative mb-4 md:mb-0">

                        <p>
                            Me gusta que el proceso me devuelva más preguntas que respuestas, porque las grandes revoluciones se generan cuando cambiamos de pregunta, no de respuesta. 
                            Quiero desconocerme en el proceso, salirme de mi mismo y saber que puedo ser de otra forma, aunque como dice Deleuze, la identificación es siempre una ilusión q impide q el sentido sea alcanzado.
                        </p>

                    </div>

                    <div class="container text-left text-container text-container-1 relative">

                        <p>
                            La interpretación es lo q hace q el sentido sea posible. Pero la interpretación es siempre una multiplicidad q impide q el sentido sea fijo. La intuición me castiga si freno en la razón incompleta, pero siempre escucho música en el corazón de las formas como una señal, entonces bailo y sigo con humedad en las sienes hasta la próxima señal.
                        </p>

                    </div>

                </div>

            </div>

            <div class="text-chairs flex">

            </div>





            <div class="grid-products">

                <div class="card-container">

                    <img src="assets/img/products/img-7.webp" alt="Product 1" class="h-auto" loading="lazy">

                    <div class="button-products"><a href="products.php">PRODUCTS</a></div>

                    <div class="card-text-container text-studio-romeo">

                        <a href="">ESPEJO</a>
                        <a href="" class="text-gray">ORBITA</a>



                    </div>

                </div>

                <div class="card-container">
                    <a href="desierto.php">
                        <img src="/assets/img/products/rosa del desierto/IMG_7181.webp" alt="Product 2" class="h-auto" loading="lazy">
                    </a>

                    <div class="button-products"><a href="products.php">PRODUCTS</a></div>

                    <div class="card-text-container text-studio-romeo">

                        <a href="/productos/desierto.php">ESTANTERIA</a>

                        <a href="/productos/desierto.php" class="text-gray">ROSA DEL DESIERTO</a>

                    </div>

                </div>

                <div class="card-container">

                    <img src="assets/img/products/img-9.webp" alt="Product 3" class="h-auto" loading="lazy">

                    <div class="button-products"><a href="products.php">PRODUCTS</a></div>

                    <div class="card-text-container text-studio-romeo">

                        <a href="">TABURETE</a>
                        <a href="" class="text-gray">HAZEL</a>



                    </div>

                </div>

            </div>



            <div>

                <div class="text-chairs flex">

                </div>

                <!-- form SECTION -->



                <div class="max-w-md mx-auto mt-10 form-home no-98-styles">
                    <form action="contact.php" method="POST" target="_blank" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 text-form form-input">NOMBRE:</label>
                            <input type="text" id="name" name="name" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-input" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 text-form form-input">EMAIL:</label>
                            <input type="email" id="email" name="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-input" required>
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 text-form form-input">TELEFONO:</label>
                            <input type="tel" id="phone" name="phone" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-input" required>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2 text-form form-input">MENSAJE:</label>
                            <textarea id="message" name="message" rows="4" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline form-input" required></textarea>
                        </div>

                        <div class="flex items-center justify-center boton form-input">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline boton w-full text-form text-center">
                                ENVIAR MENSAJE
                            </button>
                        </div>
                    </form>
                </div>

                <a href="https://wa.me/5491150372547" target="_blank" class="whatsapp-button">
                    <img src="assets/img/icons8-whatsapp.svg" alt="WhatsApp" class="whatsapp-icon">
                </a>



                <footer>
                    <div class="footer-container">
                        <div class="container border container-footer  text-studio-romeo">
                            <p>STUDIO GALLERY</p>
                            <p class="underline"><a href="https://maps.app.goo.gl/PeZNLKZucj9PfwPj7?g_st=com.google.maps.preview.copy" target="_blank">AV. DEL LIBERTADOR 186, BSAS</a></p>
                            <p class="text-footer-space">BUENOS AIRES, ARGENTINA</p>
                            <p>CONTACTANOS</p>
                            <p class="underline"><a href="https://wa.me/5491150372547" target="_blank">+54 9 115 037 2547</a></p>
                            <p class="underline"><a href="https://wa.me/5491168870714" target="_blank">+54 9 11 6887-0714</a></p>

                        </div>
                        <div class="container border container-footer">
                            <p>INFO VENTAS</p>
                            <p class="underline text-footer-space">INFO@ROMEOSOSASTUDIO.COM</p>
                            <p>STUDIO</p>
                            <p class="underline text-footer-space">STUDIO@ROMEOSOSASTUDIO.COM</p>
                            <p>PRENSA</p>
                            <p class="underline text-footer-space">PRENSA@ROMEOSOSASTUDIO.COM</p>

                        </div>
                        <div class="container border container-footer container-cruz flex justify-center items-center relative">
                            <img src="assets/img/Romeo.png" alt="" class="relative">
                        </div>
                        <div class="container border container-footer  text-studio-romeo">
                            <p class="text-footer-space-2"><a href="https://www.instagram.com/romeososaig/" class="underline" target="_blank">INSTAGRAM</a></p>
                            <p class="underline"><a href="https://www.instagram.com/romeososaig/" class="underline" target="_blank">@ROMEOSOSAIG</a></p>

                        </div>
                    </div>
                </footer>


            </div>

            <script src="assets/js/style.js"></script>
            <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
            <script>
                var elem1 = document.querySelector('#image-slider-1');
                var flkty1 = new Flickity(elem1, {
                    wrapAround: true,
                    autoPlay: true,
                    pageDots: false,
                    prevNextButtons: false

                });
            </script>

</body>



</html>