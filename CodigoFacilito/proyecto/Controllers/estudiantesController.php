<?php
namespace Controllers;

use Models\Estudiante as Estudiante;
use Models\Seccion as Seccion;

class estudiantesController {

    private $estudiante;
    private $seccion;

    public function __construct() {
        $this->estudiante = new Estudiante();
        $this->seccion = new Seccion();
    }

    public function index() {
        $datos = $this->estudiante->listar();
        return $datos;
    }

    public function agregar() {
        if (!$_POST) {
            $datos = $this->seccion->listar();
            return $datos;
        } else {
            $permitido = array("image/jpeg", "image/gif", "image/jpg");
            $limite = 700;
            if ((in_array($_FILES['imagen']['type'], $permitido)) && ($_FILES['imagen']['size'] <= $limite * 1024)) {
                $nombre = date('is') . $_FILES['imagen']['name'];
                $ruta = "Views" . DS . "template" . DS. "imagenes" . DS . "avatars" . DS . $nombre;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $this->estudiante->set('nombre', $_POST['nombre']);
                $this->estudiante->set('edad', $_POST['edad']);
                $this->estudiante->set('promedio', $_POST['promedio']);
                $this->estudiante->set('imagen', $nombre);
                $this->estudiante->set('id_seccion', $_POST['id_seccion']);
                $this->estudiante->add();
                header("Location: " . URL . "estudiantes");
            } else {
                echo "SUCEDIO UN ERROR";
                if (!(in_array($_FILES['imagen']['type'], $permitido))) {
                    echo ", IMAGEN NO PERMITIDA";
                }
                if (($_FILES['imagen']['size'] <= $limite * 1024)) {
                    echo ", IMAGEN MUY PESADA";
                }
                $datos = $this->seccion->listar();
                return $datos;
            }
        }
    }

    public function editar($id) {
        if (!$_POST) {
            $this->estudiante->set("id",$id[0]);
            $datos = $this->estudiante->view();
            return $datos;
        } else {
            $this->estudiante->set("id",$_POST['id']);
            $this->estudiante->set("nombre", $_POST['nombre']);
            $this->estudiante->set("edad", $_POST['edad']);
            $this->estudiante->set("promedio", $_POST['promedio']);
            $this->estudiante->set("id_seccion", $_POST['id_seccion']);
            $this->estudiante->edit();
            header("Location: " . URL . "estudiantes");
        }

    }

    public function listarSecciones() {
        $datos = $this->seccion->listar();
        return $datos;
    }

    public function ver($id){
  			$this->estudiante->set("id",$id[0]);
  			$datos = $this->estudiante->view();
  			return $datos;
		}

    public function eliminar($id) {
        $this->estudiante->set("id",$id[0]);
        $this->estudiante->delete();
        header("Location: " . URL . "estudiantes");
    }

}
$estudiantes = new estudiantesController();

?>
