<?php

spl_autoload_register(function($clase) {

    $ruta = "api/" . str_replace("\\","/",$clase) . ".php";
    if (is_readable($ruta)) {
        require_once($ruta);
    } else {
        echo "El archivo no existe";
    }

});
/*
require_once "api/Models/Persona.php";
require_once "api/Controllers/PersonasController.php";
*/
Models\Persona::Hola();
echo "<br>";
Controllers\PersonasControllers::Hola();
?>
