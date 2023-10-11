<?php
@include './includes/templates/header.php';

?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
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

    </main>


    <?php
 
 @include 'includes/templates/footer.php'
 ?>