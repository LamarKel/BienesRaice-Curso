 <?php
    require 'includes/funciones.php';

    incluirTemple('header', $inicio = true);
    ?>

 <main class="contenedor seccion">
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
 </main>

 <section class="seccion contenedor">
     <h2>Casas y Departamentos en venta</h2>
      <?php 
        $limite = 3;
        include 'includes/templates/anuncios.php';
      ?>


     <div class="ver-todas alinear-derecha">
         <a href="anuncios.php" class="boton boton-verde">Ver Todas</a>
     </div>
 </section>
 <section class="imagen-contacto">
     <h2>Encuentra la casa de tu sueños</h2>
     <p>En Bienes Raíces, te ayudamos a encontrar la propiedad perfecta para ti. Explora nuestra amplia gama de
         anuncios y descubre tu nuevo hogar.</p>
     <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
 </section>

 <div class="seccion contenedor seccion-inferior">
     <section class="blog">
         <h3>
             Nuestro Blog
         </h3>
         <article class="entrada-blog">
             <div class="imagen">
                 <picture>
                     <source srcset="build/img/blog1.webp" type="image/webp">
                     <source srcset="build/img/blog1.jpg" type="image/jpeg">
                     <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                 </picture>
             </div>
             <div class="texto-entrada">
                 <a href="entrada.php">
                     <h4>Terraza en el techo de tu casa</h4>
                     <p class="informacion-meta">Escrito el: <span>01/10/2023</span> por: <span>Admin</span></p>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                 </a>
             </div>
         </article>

         <article class="entrada-blog">
             <div class="imagen">
                 <picture>
                     <source srcset="build/img/blog2.webp" type="image/webp">
                     <source srcset="build/img/blog2.jpg" type="image/jpeg">
                     <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                 </picture>
             </div>
             <div class="texto-entrada">
                 <a href="entrada.php">
                     <h4>Guia para la decoracion de tu hogar</h4>
                     <p class="informacion-meta">Escrito el: <span>01/10/2023</span> por: <span>Admin</span></p>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                 </a>
             </div>
         </article>
     </section>

     <section class="testimoniales">
         <h3>Nuestros Testimoniales</h3>
         <div class="testimonial">
             <blockquote>
                 "Excelente servicio, me ayudaron a encontrar la casa de mis sueños y el proceso fue muy sencillo."
             </blockquote>
             <p>- Juan Pérez</p>
         </div>

     </section>
 </div>



 <?php incluirTemple('footer'); ?>