<!DOCTYPE html>
<?php
/*Conexión entre php y la base de datos "notas" de postgresql */
    $conexion=pg_connect("host=localhost dbname=notas user=notasadmin password=incasnotas");

?>
<html lang="es">
    <head>
        <meta name="description" content="Sitio web sobre control de notas INCAS">
        <meta name="Keywords" content="Control de notas incas,CONTROL DE NOTAS INCAS,Control De Notas Incas,control de notas incas,incas,Incas,INCAS,&iacute;nstituto nacional cornelio azen&oacute;n Sierra, &Iacute;NSTITUTO NACIONAL CORNELIO AZEN&Oacute;N SIERRA,&Iacute;nstituto Nacional Cornelio Azen&oacute;n Sierra">
        <meta name="author" content="Promoci&oacute;n de bachillerato tecnico vocacional en software año 2023">
        <meta name="copyright" content="Sitio web sobre control de notas INCAS,Promoci&oacute;n de bachillerato tecnico vocacional en software año 2023">
        
        <!--Vinculaación de ficheros externos-->
    <title>Consulta de notas INCAS</title>
    <link rel="shourt icon" href="/control_de_notas/images/incas.png">
    <link rel="stylesheet" type="text/css" href="/control_de_notas/css/principal.css" media="screen"/>
    </head>
    <body>
        <h1 id="consulta">Consulta de notas</h1> 
        <img id="decoracion" src="/control_de_notas/images/profesor.png">
        <br><br><br><br><br><br><br><br>
 
        <!--Formulario-->
        <div class="formulario">
             <h1 id="inicio">Inicio de sesi&oacute;n</h1>
             <form method="post">
                 <div class="username">
                     <input type="text" name="usuario" required >
                     <label>Usuario</label>
                 </div>
                 <div class="username">
                     <input type="text" name="dui" required >
                     <label>dui</label>
                 </div>
                 <div class="username">
                     <input type="password" name="contrasena" required>
                     <label>Contrase&ntilde;a</label>
                 </div>
                 <input type="submit" value="Inciar" name="registro">
                 <div class="Registrar"></div>
             </form>
        </div>
    </body>
</html>

<?php
if(isset($_POST['registro'])) {//Evaluea si hay datos
    if (strlen($_POST['usuario']) >= 1 or strlen($_POST['dui']) >= 1 or strlen($_POST['contrasena']) >= 1 ) {
        session_start();
        $usuario = trim($_POST['usuario']);//Llama los datos de usuario
        $dui = trim($_POST['dui']);//Llama los datos de dui
        $password = trim($_POST['contrasena']);//Llama los datos de contraseña
        //Validad los datos y 
        $query="SELECT * FROM tbl_usuario WHERE usuario_padres='$usuario' AND contrasena_padres='$dui' AND contrasena_padres='$password'";
        $consulta=pg_query($conexion,$query);
        $cantidad=pg_num_rows($consulta);
        if($cantidad>0){
            $query ="SELECT * FROM tbl_estudiantes WHERE dui='$dui'"
            if($query > 1){
                header("location: ./hijos.php");
            }else{
                header("location: ./boletas.php");
            }
        }else{
            echo "Datos incorrectos!";
        }
    }

    }

    $usuario = 0;
    $dui = 0;
    $password = 0;
?>