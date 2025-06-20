 <?php 
    require 'includes/funciones.php';

    incluirTemple('header');
 ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpeg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen destacada">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">
                3,000,00
            </p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento">
                    <p>2</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono Dormitorio">
                    <p>4</p>
                </li>
            </ul>

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