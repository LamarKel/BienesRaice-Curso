 <?php 
    require 'includes/funciones.php';

    incluirTemple('header');
 ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia de decoracion de hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpeg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen destacada">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2025</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam id accusantium consequatur nisi
                explicabo architecto veniam exercitationem, eum est optio nam fuga quis rem facilis necessitatibus,
                quaerat itaque, animi nesciunt! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae accusamus
                voluptatum ducimus maiores, dolorem quos sint placeat iusto amet corrupti omnis veritatis nulla qui rem
                temporibus commodi! Id, vero maxime!</p>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae porro minus quae laudantium
                veritatis inventore molestias dolores facilis modi. Dolorem dolor ab eligendi in, id exercitationem sunt
                expedita a soluta.</p>
        </div>
    </main>

<?php incluirTemple('footer'); ?>