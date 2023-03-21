<?php
include("conexion_padre.php");//Conecta con la conexion entre php y la base de datos

if(isset($_POST['registro'])) {//Evaluea si hay datos
    if (strlen($_POST['usuario']) >= 1 or strlen($_POST['dui']) >= 1 or strlen($_POST['contrasena']) >= 1 ) {
        session_start();
        $usuario = trim($_POST['usuario']);//Llama los datos de usuario
        $dui = trim($_POST['dui']);//Llama los datos de dui
        $password = trim($_POST['contrasena']);//Llama los datos de contraseña
        //Validad los datos
        $query="SELECT * FROM tbl_usuario WHERE usuario_padres='$usuario' AND dui='$dui' AND contrasena_padres='$password'";
        $consulta=pg_query($conexion,$query);
        $cantidad=pg_num_rows($consulta);
        if($cantidad>0){
            $_SESSION['nombre_p']=$usuario;
            header("location: ./materia.php");
        }else{
            echo "Datos incorrectos!";
        }
    }

    $usuario = 0;
    $password = 0;
}

?>