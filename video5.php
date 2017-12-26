<?php
class Facebook {

    //Atributos
    public $nombre;
    public $edad;
    private $pass; //Contraseña

    //Metodos
    public function __construct($nombre, $edad, $pass) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pass = $pass;
    }

    public function verInformacion() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        self::cambiarPass("54321");
        echo "Password: " . $this->pass . "<br>";
    }

    private function cambiarPass($pass) {
        $this->pass = $pass;
    }
}
$facebook = new Facebook("Ricardo Rios",34,"123456");
//echo $facebook->pass; // Atributo Privado y arrojara un error
$facebook->verInformacion();
?>
