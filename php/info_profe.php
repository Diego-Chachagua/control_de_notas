<?php
/*Conexión entre php y la base de datos "notas" de postgresql */
$conexion=pg_connect("host=localhost dbname=notas user=notasadmin password=incasnotas");

    $usuario=$_POST['usuario'];
    $pass=$_POST['contrasena'];
    $consulta="SELECT usuario_profe , contrasena_profe FROM tbl_usuario WHERE usuario_profe='$usuario' AND contrasena_profe='$pass'";
    $query=pg_query($conexion,$consulta);
    while($col=pg_fetch_Array($query)){
        $usuario_P=$col['usuario_profe'];
        $contrasena=$col['contrasena_profe'];
    }
    if($usuario_P != $usuario && $contrasena != $pass){
        header("location: formulario_profesor.php");
    }elseif($usuario_P == $usuario && $contrasena == $pass){
        session_start();
        $_SESSION['usuario']=$usuario;
        header("location: materia.php");
    }

