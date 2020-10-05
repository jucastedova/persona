<?php

require_once 'persona.php';
require_once 'alumnos.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];

// $persona = new Persona($nombre, $apellido);
// $persona->setDni($dni);
// echo " Tu DNI es: {$persona->getDni()}";
// echo '<br>';

$alumno1 = new Alumnos($nombre, $apellido, '1111');
$mensaje = $alumno1->saludar('Hola, ');
echo $mensaje;
echo '<br>';

$letraDni = $alumno1->calcularLetraDni($dni);
echo "Tu DNI completo es: {$dni}{$letraDni}"

?>