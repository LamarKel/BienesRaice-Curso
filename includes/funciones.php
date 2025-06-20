<?php
require 'app.php';

function incluirTemple(string $nombre, bool $inicio = false){
       include TEMPLATES_URL . "/$nombre.php";
}
 