<?php
include 'conexion.php';
$con=conexion();
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
if($nombre_estudiante=="" || $grado=="" || $seccion=="" || $genero=="" || $apellido_estudiante=="" || $nombre_padre=="" || $apellidos_padre=="" || $dui_padre=="" ||  $nie_estudiante=="" ){
    //si cualquiera de los padres esta vacio
    header("location: administrador.php");
}else{
    //insercion de datos en tabla padre
$consulta5="INSERT INTO tbl_padres(dui,nombre_padre,apellido_padre) VALUES ('$dui_padre','$nombre_padre','$apellidos_padre')";
$query5=pg_query($con,$consulta5);
    if($seccion=="A"){
        $cod_seccion="1";
    }elseif($seccion=="F"){
        $cod_seccion="2";

    }elseif($seccion=="E"){
        $cod_seccion="3";
        
    }elseif($seccion=="H"){
        $cod_seccion="4";
        
    }elseif($seccion=="G"){
        $cod_seccion="5";
        
    }elseif($seccion=="D"){
        $cod_seccion="6";
        
    }
    if($genero=="Masculino"){
        $genero="M";
    }elseif($genero=="Femenino"){
        $genero="F";
    }
    //insercion de datos en tabla estudiantes
    $consulta1="INSERT INTO tbl_estudiantes VALUES ('$nie_estudiante','$cod_seccion','$grado','$dui_padre','$nombre_estudiante', '$apellido_estudiante','$genero')";
    $query1=pg_query($con,$consulta1);
    //ingreso de notas a tabla estu_mate
    $contar=count($materias)-1;
for($i=0;$i<=$contar;$i++){
    $consulta2="INSERT INTO tbl_estu_mate(nie,cod_materia) VALUES ('$nie_estudiante','$materias[$i]') ";   
    $query2=pg_query($con,$consulta2);
}
//insercion de datos en tabla notas
for($i=0;$i<=$contar;$i++){
$consulta3="INSERT INTO tbl_notas(nie,cod_boleta,cod_materia) VALUES ('$nie_estudiante','1','$materias[$i]') ";
$query3=pg_query($con,$consulta3);
}
//insercion en tabla promedio
for($i=0;$i<=$contar;$i++){
$consulta4="INSERT INTO tbl_promedio(nie,cod_materia,cod_boleta) VALUES ('$nie_estudiante','$materias[$i]','1')";  
$query4=pg_query($con,$consulta4); 
}

header("location: administrador.php");


}

