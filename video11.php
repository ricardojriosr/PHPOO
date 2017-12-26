<?php
//Traits
trait Persona2 {

    public $nombre;

    public function mostrarNombre() {
        echo $this->nombre;
    }

    abstract function asignarNombre($nombre);

}

trait Trabajador {

    protected function mensaje() {
          echo "Soy un trabajador y me llamo: ";
    }

}

class Persona {

    use Persona2;
    use Trabajador;

    public function asignarNombre($nombre) {
        $this->nombre = $nombre . self::mensaje(); //Ya esta en el trait
    }

}

$persona = new Persona();
$persona->asignarNombre("Ricardo");
$persona->mostrarNombre();
?>
