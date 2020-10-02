<?php
include 'persona.php';
class Alumnos extends Persona {
    // Atributos
    private $numeroMatricula;
    private $notaProgramacion;
    // Constructor
    function construct($nombre, $apellido, $numeroMatricula, $notaProgramacion) {
        parent::__construct($nombre, $apellido);
        $this->numeroMatricula = $numeroMatricula;
        $this->notaProgramacion = $notaProgramacion;
    }
    // Métodos Getters y Setters
    public function getNumeroMatricula() {
        return $this->numeroMatricula;
    }

    public function setNumeroMatricula($numeroMatricula) {
        $this->numeroMatricula = $numeroMatricula;
        return $this;
    }

    public function getNotaProgramacion() {
        return $this->notaProgramacion;
    }

    public function setNotaProgramacion($notaProgramacion) {
        $this->notaProgramacion = $notaProgramacion;
        return $this;
    }
    
}

?>