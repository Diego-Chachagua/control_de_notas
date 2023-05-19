<?php
include 'conexion.php';
$con=conexion();
//ingreso de datos para maestros
$materias_prof=$_POST['materias_prof'];//contiene en array los codigos de las materias seleccionadas del profesor
$grado_prof=$_POST['grado_prof'];
$seccion_prof=$_POST['secciones_prof'];
$genero_prof=$_POST['genero_prof'];
$nombre_prof=$_POST['nombre_profesor'];
$apellidos_prof=$_POST['apellidos_profesor'];



if($grado_prof=="" || $seccion_prof=="" || $genero_prof=="" || $nombre_prof=="" || $apellidos_prof=="" || $materias_prof==""){
    echo "<script type='text/javascript'>
    var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
    w.document.open();
    w.document.write('<center><br><h1>FALTO LLENAR CAMPOS</h1><h2>Todo salio correctamente </h2></center>'); 
    w.document.close();
    </script> ";
    
    echo "<script>
    window.location.href = 'administrador.php';
    </script>";
    
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

//ingreso de datos del maestro a la tabla profe_materia
//obtener el ultimo codigo del profesor y sumarle +1 para asginar un nuevo codigo y llenar otras tablas
$consulta9="SELECT cod_profe FROM tbl_profesor";
$query9=pg_query($con,$consulta9);
while($col1=pg_fetch_Array($query9)){
    $cod_profe=$col1['cod_profe'];
}
$codigo_p=$cod_profe+1;
//envio de datos a tabla profesor
$consulta6="INSERT INTO tbl_profesor(cod_profe,nombre_profesor,apellido_profesor,genero) VALUES ('$codigo_p','$nombre_prof','$apellidos_prof','$genero_prof')";
$query6=pg_query($con,$consulta6);


$contar_profe=count($materias_prof)-1;//contar la cantidad de elementos del array -1
for($i=0;$i<=$contar_profe;$i++){
    $consulta10="INSERT INTO tbl_profe_materia(cod_profe,cod_materia) VALUES ('$codigo_p','$materias_prof[$i]')";
    $query10=pg_query($con,$consulta10);
}
//ingreso de datos del profesor a tabla profe_Secciones
$contar_S=count($seccion_prof)-1;
for($i=0;$i<=$contar_S;$i++){
    $consulta11="INSERT INTO tbl_profe_seccion(cod_profe,cod_seccion) VALUES ('$codigo_p','$seccion_prof[$i]')";
    $query11=pg_query($con,$consulta11);
}
//con un usuario y contraseña  se guarda el valor
$consulta8="INSERT INTO tbl_usuario(cod_profe,usuario_profe,contrasena_profe) VALUES ('$codigo_p','$usuario','$key')";
$query8=pg_query($con,$consulta8);
//para llenar la tabla profe_grado
if($grado_prof=="1"){
    $consulta12="INSERT INTO tbl_profe_grado(cod_profe,cod_grado) VALUES ('$codigo_p','$grado_prof')";
    $query12=pg_query($con,$consulta12);
}elseif($grado_prof=="2"){
    $consulta12="INSERT INTO tbl_profe_grado(cod_profe,cod_grado) VALUES ('$codigo_p','$grado_prof')";
    $query12=pg_query($con,$consulta12);
}elseif($grado_prof=="1 y 2"){
    for($i=1;$i<=2;$i++){
    $consulta12="INSERT INTO tbl_profe_grado(cod_profe,cod_grado) VALUES ('$codigo_p','$i')";
    $query12=pg_query($con,$consulta12);
    }
}
echo "<script type='text/javascript'>
var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
w.document.open();
w.document.write('<center><br><h1>DATOS DEL PROFESOR INGRESADOS CORRECTAMENTE</h1><h2>Se completo correctamente </h2></center>'); 
w.document.close();
</script> ";

echo "<script>
window.location.href = 'administrador.php';
</script>";

}