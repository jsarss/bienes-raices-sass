<?php
@include './includes/templates/header.php';

?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam sit animi error laborum quam
                    architecto porro unde, consequatur maxime nobis! Nam dignissimos quasi hic laudantium ea distinctio!
                    Consequuntur, aspernatur recusandae! maxime nobis! consectetur adipisicing elit. Quibusdam sit animi error laborum quam
                    architecto porro unde, consequatur maxime nobis! Nam dignissimos quasi hic laudantium ea distinctio!
                    Consequuntur, aspernatur recusandae! maxime
                </p>
                <P>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla asperiores nam est nemo error iure voluptatem numquam, corrupti exercitationem consectetur porro accusantium minus laudantium ipsa ratione fugiat dignissimos? Quibusdam quo sint animi explicabo deserunt quas ut molestiae dolorem odit eligendi! Soluta molestiae mollitia, molestias dolor ipsam asperiores quis possimus totam.
                </P>

            </div>
        </div>

    </main>
    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem molestiae doloribus culpa expedita
                    dolores tempore provident, reprehenderit labore. Cum fugit quae facilis laborum velit nobis sapiente
                    consectetur beatae suscipit sed.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem molestiae doloribus culpa expedita
                    dolores tempore provident, reprehenderit labore. Cum fugit quae facilis laborum velit nobis sapiente
                    consectetur beatae suscipit sed.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem molestiae doloribus culpa expedita
                    dolores tempore provident, reprehenderit labore. Cum fugit quae facilis laborum velit nobis sapiente
                    consectetur beatae suscipit sed.</p>
            </div>

        </div>

    </section>


    <?php
 
     @include 'includes/templates/footer.php'
     ?>