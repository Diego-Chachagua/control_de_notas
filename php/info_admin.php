<?php
//entrada de datos para el registro de estudiantes
$materias=$_POST['materias'];//contiene en array los codigos de las materias seleccionadas
$nombre_estudiante=$_POST['nombre_alumno'];
$grado=$_POST['grado'];
$seccion=$_POST['seccion'];
$genero=$_POST['genero'];
$apellido_estudiante=$_POST['apellidos_alumno'];
$nombre_padre=$_POST['nombre_padre'];
$apellidos_padre=$_POST['apellidos_padre'];
$dui_padre=$_POST['dui'];
$nie_estudiante=$_POST['nie'];
//si algun campo esta vacio
if($nombre_estudiante=="" || $grado=="" || $seccion=="" || $genero=="" || $apellidos_alumno=="" || $nombre_padre=="" || $apellidos_padre=="" || $dui_padre=="" ||  $nie_estudiante==""){
    //si cualquiera de los padres esta vacio
    header("location: administrador.php");
}else{
    
}

