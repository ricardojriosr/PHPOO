<?php
namespace Controllers;

use Models\Seccion as Secciones;

class seccionesController {

  public function __construct() {
      $this->secciones = new Secciones();
  }

  public function index() {
      $datos = $this->secciones->listar();
      return $datos;
  }

  public function agregar() {
      if ($_POST) {
          $this->secciones->set('nombre', $_POST['nombre']);
          $this->secciones->add();
          header("Location: " . URL . "secciones");
      }
  }


}
?>
