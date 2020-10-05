<?php

Abstract class Persona {
    // Atributos
    protected $nombre;
    protected $apellido;
    protected $dni;
    // Constructor
    function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    // Métodos Getter y Setter
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
    * Esta función recibe un parámetro -> $mensaje
    * Devuelve un mensaje
    * :String significa que devuelve un String
    */
    public final function saludar(String $mensaje):String {
        return "{$mensaje} {$this->getNombre()} {$this->getApellido()}";
    }

    abstract function calcularLetraDni($dni);

    // public function calcularLetraDni($dni) {
    //     $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    //     $numero = $dni % 23;
    //     $letraDni = $letras[$numero];
    //     return $letraDni;
    // }

}

?>