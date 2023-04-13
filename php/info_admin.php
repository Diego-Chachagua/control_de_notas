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
//comprobacion de la seccion seleccionada
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

//ingreso de datos para maestros
$materias_prof=$_POST['materias_prof'];//contiene en array los codigos de las materias seleccionadas del profesor
$grado_prof=$_POST['grado_prof'];
$seccion_prof=$_POST['secciones_prof'];
$genero_prof=$_POST['genero_prof'];
$nombre_prof=$_POST['nombre_profesor'];

$apellidos_prof=$_POST['apellidos_profesor'];
if($grado_prof=="" || $seccion_prof=="" || $genero_prof=="" || $nombre_prof=="" || $apellidos_prof="" ){
    //si cualquiera de los campos esta vacio
    
}else{
//comprobacion de genero
if($genero_prof=="Masculino"){
    $genero_prof="M";
}elseif($genero_prof=="Femenino"){
    $genero_prof="F";
}

//consulta de usuario de bd para el ingreso de nuevo usuario
$consulta7="SELECT usuario_profe, contrasena_profe FROM tbl_usuario";
$query7=pg_query($con,$consulta7);
//condicion para evaluar si un usuario ya esta repetido
$x=1;
while($x!=0){
//generador de usuario y contraseña
//generador de usuario con el nombre y un numero aleatorio
$usuario=$nombre_prof.rand(1,100);
//generador de contraseña
$key = "";
$length=6;
$max=6;
    for($i = 0; $i < $length; $i++){
        $key .= substr($nombre_prof, mt_rand(0,$max), 1);
    }
    while($col=pg_fetch_Array($query7)){
     if($usuario!=$col['usuario_profe'] && $key!=$col['contrasena_profe']){
        $x=0;
    }
  }
}
//con un usuario y contraseña  se guarda el valor
$consulta8="INSERT INTO tbl_usuario(usuario_profe,contrasena_profe) VALUES ('$usuario','$key')";
$query8=pg_query($con,$consulta8);
//ingreso de datos del maestro a la tabla profe_materia
//obtener el ultimo codigo del profesor y sumarle +1 para asginar un nuevo codigo y llenar otras tablas
$consulta9="SELECT cod_profe FROM tbl_profesor";
$query9=pg_query($con,$consulta9);
while($col1=pg_fetch_Array($query9)){
    $cod_profe=$col1['cod_profe'];
}
$codigo_p=$cod_profe+1;
//envio de datos a tabla profesor
$consulta6="INSERT INTO tbl_profesor(nombre_profesor,apellido_profesor,genero) VALUES ('$nombre_prof','$apellidos_prof','$genero_prof')";
$query6=pg_query($con,$consulta6);

$contar_profe=count($materias_prof)-1;//contar la cantidad de elementos del array -1
for($i=0;$i<=$contar_profe;$i++){
    $consulta10="INSERT INTO tbl_profe_materia(cod_profe,cod_materia) VALUES ('$codigo_p','$materias_prof[$i]')";
    $query10=pg_query($con,$consulta10);
}
//ingreso de datos del profesor a tabla profe_Secciones
$contar_S=count($seccion_prof)-1;
for($i=0;$i<=$contar_S;$i++){
    $consulta11="INSERT INTO tbl_profe_seccion(cod_profe,cod_seccion) VALUES ('$cod_profe','$seccion_prof[$i]')";
    $query11=pg_query($con,$consulta11);
}
//para llenar la tabla profe_grado
if($grado_prof=="1"){
    $consulta12="INSERT INTO tbl_profe_grado(cod_profe,cod_grado) VALUES ('$cod_profe','$grado_prof')";
    $query12=pg_query($con,$consulta12);
}elseif($grado_prof=="2"){
    $consulta12="INSERT INTO tbl_profe_grado(cod_profe,cod_grado) VALUES ('$cod_profe','$grado_prof')";
    $query12=pg_query($con,$consulta12);
}elseif($grado_prof=="1 y 2"){
    for($i=1;$i<=2;$i++){
    $consulta12="INSERT INTO tbl_profe_grado(cod_profe,cod_grado) VALUES ('$cod_profe','$i')";
    $query12=pg_query($con,$consulta12);
    }
}
header("location: administrador.php");

}//fin de funcionalidad de bloque para el ingreso de datos del profesor
//oscar si ves esto el apartado de escoger seccion del profesor le hace falta mejoras en el css


