  <?php 
    require 'includes/funciones.php';

    incluirTemple('header');
 ?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="imagen/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 anos de experencias
                </blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime odio cupiditate facilis pariatur
                    illum saepe ipsum perferendis eum voluptatum molestias incidunt, consectetur doloribus possimus
                    inventore praesentium, distinctio reiciendis ducimus dolor. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Maxime odio cupiditate facilis pariatur
                    illum saepe ipsum perferendis eum voluptatum molestias incidunt, consectetur doloribus possimus
                    inventore praesentium, distinctio reiciendis ducimus dolor</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos fugit facilis asperiores ducimus, sunt
                    temporibus, necessitatibus quisquam dolores quidem architecto labore, voluptatibus maxime nemo quod
                    iure ab dignissimos provident consequuntur.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono 1" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ea eaque natus fuga exercitationem a
                    laudantium! Illo assumenda suscipit officiis dicta modi minima blanditiis porro totam exercitationem
                    eos. Consequuntur, rem.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono 2" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ea eaque natus fuga exercitationem a
                    laudantium! Illo assumenda suscipit officiis dicta modi minima blanditiis porro totam exercitationem
                    eos. Consequuntur, rem.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono 3" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, ea eaque natus fuga exercitationem a
                    laudantium! Illo assumenda suscipit officiis dicta modi minima blanditiis porro totam exercitationem
                    eos. Consequuntur, rem.</p>
            </div>
        </div>
    </section>

<?php incluirTemple('footer'); ?>