<?php
//Autoload
function autoload($clase) {
    include "clases/" . $clase . ".php";
}

spl_autoload_register('autoload');

Auto::mostrar('Hola mundo');
Persona::mostrar(' de Codigo Facilito');
?>
