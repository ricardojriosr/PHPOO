<?php
class Persona {

    //Atributos
    public $nombre = "Pedro";

    //Metodos
    public function hablar($mensaje) {
        echo $mensaje;
    }

}

$persona = new Persona();
echo $persona->nombre;
echo '<br>';
$persona->hablar("saludos desde CodigoFacilito");
?>
