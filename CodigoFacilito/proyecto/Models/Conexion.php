<?php
namespace Models;

class Conexion {

    private $datos = array(
        "host"      => "localhost",
        "user"      => "root",
        "pass"      => "",
        "database"  => "proyecto1"
    );
    private $con;

    public function __construct() {
        $this->con = new \mysqli(
          $this->datos['host'],
          $this->datos['user'],
          $this->datos['pass'],
          $this->datos['database']
        );
    }

    public function consultaSimple($sql) {
        $this->con->query($sql);
    }

    public function consultaRetorno($sql) {
        $datos = $this->con->query($sql);
        return $datos;
    }
}
?>
