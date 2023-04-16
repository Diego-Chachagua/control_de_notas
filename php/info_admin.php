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
header("location: administrador.php");

}//fin de funcionalidad de bloque para el ingreso de datos del profesor
//inicio de definicion para espacio de eliminar;
$eliminar=$_POST['eliminar'];
$codigo=$_POST['cod_user'];
if($eliminar=="Maestro"){
    $consulta0="SELECT cod_profe FROM tbl_profesor WHERE cod_profe='$codigo'";
    $query0=pg_query($con,$consulta0);
    while($col5=pg_fetch_Array($query0)){
        $cod_maestro=$col5['cod_profe'];
    }
    if($cod_maestro!=$codigo){
        echo "<script type='text/javascript'>
        var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
        w.document.open();
        w.document.write('<center><br><h1>¡Maestro no encontrado!</h1><h2>Ingrese el codigo del maestro correctamente</h2></center>'); 
        w.document.close();
       </script> ";
        sleep(2);
        echo "<script>
        window.location.href = 'administrador.php';
        </script>";
    }else{
    $consulta13="DELETE FROM tbl_profe_grado WHERE cod_profe='$codigo'";
    $query13=pg_query($con,$consulta13);
    $consulta14="DELETE FROM tbl_profe_materia WHERE cod_profe='$codigo'";
    $query14=pg_query($con,$consulta14);
    $consulta15="DELETE FROM tbl_profe_seccion WHERE cod_profe='$codigo'";
    $query15=pg_query($con,$consulta15);
    $consulta16="DELETE FROM tbl_usuario WHERE cod_profe='$codigo'";
    $query16=pg_query($con,$consulta16);
    $consulta17="DELETE FROM tbl_profesor WHERE cod_profe='$codigo'";
    $query17=pg_query($con,$consulta17);
    header("location: administrador.php");
    }
}elseif($eliminar=="Alumno"){
   $dato="SELECT nie FROM tbl_estudiantes WHERE nie='$codigo'";
   $query=pg_query($con,$dato);
   while($col3=pg_fetch_Array($query)){
     $nie=$col3['nie'];
   }
if($nie!=$codigo){ 
    echo "<script type='text/javascript'>
   var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
   w.document.open();
   w.document.write('<center><br><h1>¡NIE no encontrado!</h1><h2>Ingrese el NIE del estudiante correctamente</h2></center>'); 
   w.document.close();
  </script> ";
   sleep(2);
   echo "<script>
   window.location.href = 'administrador.php';
   </script>";
}else{
    $consulta18="DELETE FROM tbl_notas WHERE nie='$codigo'";
    $query18=pg_query($con,$consulta18);
    $consulta19="DELETE FROM  tbl_promedio  WHERE nie='$codigo'";
    $query19=pg_query($con,$consulta19);
    $consulta20="DELETE FROM tbl_estu_mate WHERE nie='$codigo'";
    $query20=pg_Query($con,$consulta20);
    $consulta21="DELETE FROM tbl_estudiantes WHERE nie='$codigo'";
    $query21=pg_query($con,$consulta21);
    header("location: administrador.php");
}
}elseif($eliminar=="Padre"){
    $search_dui="SELECT dui FROM tbl_padres WHERE dui='$codigo'";
    $query24=pg_query($con,$search_dui);
    while($col4=pg_fetch_Array($query24)){
        $find_dui=$col4['dui'];
    }
    if($find_dui!=$codigo){
        echo "<script type='text/javascript'>
   var w=window.open('200px','200px','height=200, width=400, menubar=n0, toolbar=no');
   w.document.open();
   w.document.write('<center><br><h1>¡DUI no encontrado!</h1><h2>Ingrese el Dui del padre correctamente</h2></center>'); 
   w.document.close();
  </script> ";
   sleep(2);
   echo "<script>
   window.location.href = 'administrador.php';
   </script>";
    }else{
    $consulta22="DELETE FROM tbl_usuario WHERE dui='$codigo'";
    $query22=pg_query($con,$consulta22);
    $consulta23="DELETE FROM tbl_padres WHERE dui='$codigo'";
    $query23=pg_query($con,$consulta);
    header("location: administrador.php");
    }
}