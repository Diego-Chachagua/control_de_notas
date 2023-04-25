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
if($nombre_estudiante=="" || $grado=="" || $seccion=="" || $genero=="" || $apellido_estudiante=="" || $nombre_padre=="" || $apellidos_padre=="" || $dui_padre=="" ||  $nie_estudiante=="" || $materias==""){
    //si cualquiera de los padres esta vacio
    echo "<script type='text/javascript'>
    var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
    w.document.open();
    w.document.write('<center><br><h1>FALTO LLENAR UN CAMPO</h1><h2>Por favor complete todos los campos solicitados </h2></center>'); 
    w.document.close();
   </script> ";
    sleep(2);
    echo "<script>
    window.location.href = 'administrador.php';
    </script>";

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
    $consulta1="INSERT INTO tbl_estudiantes VALUES ('$nie_estudiante','$cod_seccion','$grado','$dui_padre','1','$nombre_estudiante', '$apellido_estudiante','$genero')";
    $query1=pg_query($con,$consulta1);
    //ingreso de notas a tabla estu_mate
    $contar=count($materias)-1;
for($i=0;$i<=$contar;$i++){
    $consulta2="INSERT INTO tbl_estu_mate(nie,cod_materia) VALUES ('$nie_estudiante','$materias[$i]') ";   
    $query2=pg_query($con,$consulta2);
}
//insercion de datos en tabla notas
for($i=0;$i<=$contar;$i++){
$consulta3="INSERT INTO tbl_notas(nie,cod_materia) VALUES ('$nie_estudiante','$materias[$i]') ";
$query3=pg_query($con,$consulta3);
}
//insercion en tabla promedio
for($i=0;$i<=$contar;$i++){
$consulta4="INSERT INTO tbl_promedio(nie,cod_materia) VALUES ('$nie_estudiante','$materias[$i]')";  
$query4=pg_query($con,$consulta4); 
}
$usuario_P=$nombre_padre.rand(1,100);
$x=1;
while($x!=0){
//generador de usuario y contraseña
//generador de usuario con el nombre y un numero aleatorio
//generador de contraseña
$key_p= "";
$length=6;
$max=6;
    for($i = 0; $i < $length; $i++){
        $key_p .= substr($nombre_padre, mt_rand(0,$max), 1);
    }
    $usuario_c="SELECT usuario_padres, contrasena_padres FROM tbl_usuario;";
    $user=pg_query($con,$usuario_c);
    while($col=pg_fetch_Array($user)){
     if($usuario_P!=$col['usuario_padres'] && $key_p!=$col['contrasena_padres']){
        $x=0;
    }
  }
}
$insert="INSERT INTO tbl_usuario(dui,usuario_padres,contrasena_padres) VALUES ('$dui_padre','$usuario_P','$key_p')";
$dato_U=pg_query($con,$insert);

echo "<script type='text/javascript'>
var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
w.document.open();
w.document.write('<center><br><h1>DATOS DEL ALUMNO INGRESADOS CORRECTAMENTE</h1><h2>Se completo correctamente </h2></center>'); 
w.document.close();
</script> ";
sleep(2);
echo "<script>
window.location.href = 'administrador.php';
</script>";
}