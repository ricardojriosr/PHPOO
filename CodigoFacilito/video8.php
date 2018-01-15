<?php
//Interfaces (siempre seran metodos publicos)
interface Auto {
    public function encender();
    public function apagar();
}
interface gasolina extends Auto {
    public function vaciarTanque();
    public function llenarTanque($cant);
}
class Deportivo implements gasolina {

    private $estado = false;
    private $tanque = 0;

    public function estado() {
        if ($this->estado) {
            echo "El auto esta encendido y tiene " . $this->tanque . " de litros en el tanque<br>";
        } else {
            echo "El auto esta apagado<br>";
        }
    }

    public function encender() {
        if ($this->estado) {
            echo "No puedes encender el auto dos veces<br>";
        } else {
            if ($this->tanque <= 0) {
                echo "No puedes encender el auto, porque no tiene gasolina<br>";
            } else {
                echo "El auto esta encendido<br>";
                $this->estado = true;
            }
        }
    }

    public function apagar() {
        if ($this->estado) {
            echo "Auto Apagado<br>";
            $this->estado = false;
        } else {
            echo "El auto ya estaba apagado<br>";
        }
    }

    public function vaciarTanque() {
        $this->tanque = 0;
    }

    public function llenarTanque($cant) {
        $this->tanque = $this->tanque + $cant;
    }

    public function usar($km) {
        if ($this->estado) {
            $reducir = $km / 3;
            $this->tanque = $this->tanque - $reducir;
            if ($this->tanque <= 0) {
                $this->estado = false;
                echo "El auto se apago por falta de gasolina<br>";
            }
        } else {
            echo "El auto esta apagado y no se puede usar<br>";
        }
    }

}
$obj = new Deportivo();
$obj->llenarTanque(100);
$obj->encender();
$obj->usar(320);
$obj->estado();
?>
