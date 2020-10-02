<?php
include 'persona.php';
class Profes extends Persona {
    // Atributos
    private $sueldo;

    // Constructor
    function construct($nombre, $apellido, $dni, $sueldo) {
        parent::__construct($nombre, $apellido);
        $this->dni = $dni;
        $this->sueldo = $sueldo;
    }

    public function getSueldo() {
        return $this->sueldo;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
        return $this;
    }
}

?>