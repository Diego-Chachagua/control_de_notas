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
            <form method="post" action="materia.php">
                <div class="username">
                    <input type="text" required name="usuario">
                    <label>Nombre de usuario</label>
                </div>
                <div class="username">
                    <input type="password" required name="contrasena">
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
    if (strlen($_POST['usuario']) >= 1 or strlen($_POST['contrasena']) >= 1 ) {
        session_start();
        $usuario = trim($_POST['usuario']);//Llama los datos de usuario
        $password = trim($_POST['contrasena']);//Llama los datos de contraseña
        //Validad los datos
        $query="SELECT * FROM tbl_usuario WHERE usuario_profe='$usuario' AND contrasena_profe='$password'";
        $consulta=pg_query($conexion,$query);
        $cantidad=pg_num_rows($consulta);
        if($cantidad>0){
            header("location: ./materia.php");
        }else{
           echo "Datos incorrectos";
        }


    }

}

?>