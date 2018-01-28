<?php
//Static
class Pagina {

    //Atributos
    public $nombre = "Codigo Facilito";
    public static $url = "www.codigofacilito.com";

    //Metodos
    public function bienvenida() {
        echo "Bienvenidos a <b>" . $this->nombre . "</b>, la pagina es <b>" . self::$url . "</b><br>";
    }

    public static function bienvenida2() {
        echo "Bienvenidos a <b>" . self::$nombre . "</b>, la pagina es <b>" . self::$url . "</b><br>";
    }

}

class Web extends Pagina {

}

Web::bienvenida2();
?>
