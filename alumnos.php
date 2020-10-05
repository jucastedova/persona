<?php
require_once 'persona.php';
final class Alumnos extends Persona { // Ya no se puede heredar, con el final puesto
    // Atributos
    private $numeroMatricula;
    private $notaProgramacion;
    // Constructor
    function __construct($nombre, $apellido, $numeroMatricula) {
        parent::__construct($nombre, $apellido);
        $this->numeroMatricula = $numeroMatricula;
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

    public function calcularLetraDni($dni) {
        $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
        $numero = $dni % 23;
        $letraDni = $letras[$numero];
        return $letraDni;
    }
    
    /**
     * Pero ahora hemos puesto final en la función del padre, por lo que no se va a sobreescribir y va a dar error
     */
    // public function saludar(String $mensaje):String {
    //     return "Hola mundo"; // Se ha sobreescrito el método de Persona con el mismo nombre
    // }
    

}

?>