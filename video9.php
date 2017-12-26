<?php
//Clases y Metodos abstractos
abstract class Molde {

    abstract public function ingresarNombre($nombre);
    abstract public function obtenerNombre();
    /*
    public static function mensaje($mensaje) {
        print $mensaje;
    }
    */
}
class Persona extends Molde {

    private $mensaje = "Hola Gente de Codigo Facilito";
    private $nombre;

    public function mostrar() {
        print $this->mensaje;
    }

    public function ingresarNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function obtenerNombre() {
        print $this->nombre;
    }

}
//Molde::mensaje("Hola Mundo");
$obj = new Persona();
$obj->ingresarNombre("Ricardo");
$obj->obtenerNombre();
?>
