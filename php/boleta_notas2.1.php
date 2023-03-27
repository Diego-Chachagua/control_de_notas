<?php
$host = "localhost";
$port = "5432";
$dbname = "notas";
$user = "notasadmin";
$password = "incasnotas";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("Error de conexión: " . pg_last_error());
?>

<?php
//llamada del dato dui desde formulario
 session_start();
 $dui = $_SESSION['dui'];
 ?>

<?php
//llamada del dato nie desde la página de hijos.php
$nie = $_POST['niee'];
 ?>

<?php
//solicitud de datos a la base
$query = "SELECT dui, nie, nombre_estudiante FROM tbl_estudiantes where nie='$nie' and dui='$dui'";
$result = pg_query($conn, $query) or die("Error en la consulta: " . pg_last_error());
while($mostrar=pg_fetch_assoc($result)){

$query2 = "SELECT tbl_estudiantes.nie, tbl_promedio.cod_materia, tbl_promedio.promedio_p1 FROM tbl_estudiantes INNER JOIN tbl_promedio ON tbl_estudiantes.nie=tbl_promedio.nie WHERE tbl_estudiantes.nie='$nie'";
$result1 = pg_query($conn, $query2) or die("Error en la consulta: " . pg_last_error());
while($mostrar2=pg_fetch_assoc($result1)){
?>


<!DOCTYPE html>
<html lang="en">
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
    <div class="grid-layout4">
    <img class="escudo" src="/control_de_notas/images/escudo.png">
    <center><p>MINISTERIO DE EDUCACI&Oacute;N, CIENCIA Y TECNOLOGIA DE ACREDITACI&Oacute;N INSTITUCIONAL DEPARTAMENTO DE REGISTRO ACADEMICO DE C.E</p></center>
    </div><br>
    <table border="3">
        <tr>
            <th class="tablag">Sede Educativa</th>
            <th colspan="5" class="info">10073-INSTITUTO NACIONAL "CORNELIO AZEN&Oacute;N SIERRA"</th>
        </tr>
        <tr>
            <th class="tablag">Servicio Educativo</th>
            <th colspan="5" class="info"></th> 
        </tr>
        <tr>
            <th class="tablag">Plan de Estudio</th>
            <th colspan="5" class="info"><?php  ?></th> 
        </tr>
        <tr>
            <th class="tablag">Grado</th>
            <th class="info1"></th>
            <th class="info2">Secci&oacute;n</th>
            <th class="info3"></th>
            <th class="info4">A&ntilde;o</th>
            <th class="info5"></th>
        </tr>
        <tr>
            <th class="tablag">Estudiante</th>
            <th colspan="5" class="info"><?php echo $mostrar['nombre_estudiante'] ?></th> 
        </tr>
    </table><br><br>

    <table border="3">
        <tr>
            <th class="colarriba1">Componente plan estudio</th>
            <th class="colarriba2">P1</th>
            <th class="colarriba2">P2</th>
            <th class="colarriba2">P3</th>
            <th class="colarriba2">P4</th>
            <th class="colarriba2">NI</th>
            <th class="colarriba2">PP</th>
            <th class="colarriba2">PPS</th>
            <th class="colarriba2">SP</th>
            <th class="colarriba2">SPS</th>
            <th class="colarriba2">NF</th>
            <th class="colarriba3">Resultado</th>
        </tr>
        <tr>
            <th class="barras1">LENGUAJE Y LITERATURA</th>
            <th class="barras2"><?php echo $mostrar2['promedio_p1']?></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">MATEM&Aacute;TICA</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">CIENCIAS NATURALES</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">ESTUDIOS SOCIALES Y C&Iacute;VICA</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">MORAL URBANIDAD Y C&Iacute;VICA</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">IDIOMA EXTRANJERO</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">INFORM&Aacute;TICA</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">ORIENTACI&Oacute;N PARA LA VIDA</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">SEMINARIOS</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">CURSOS DE HABILITACI&Oacute;N LABORAL</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">EVIDENCIA ACTITUDES FAVORABLES PARA LA CONVIVENCIA Y CULTURA DE PAZ</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">TOMA DESICIONES DE FORMA A&Uacute;TONOMA Y RESPONSABLE</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">SE EXPRESA Y PARTICPA CON RESPETO</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">MUESTRA SENTIDO DE PERTENENCIA Y RESPETO POR NUESTRA CULTURA</th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras1"></th>
        </tr>
    </table><br><br>
    <table border="3">
        <tr>
            <th class="avanzo1">Componente plan estudio</th>
            <th class="colarriba2">NF</th>
            <th class="resultadoa">Resultado</th>
        </tr>
        <tr>
            <th class="avanzo2">LENGUAJE Y LITERATURA PRUEBA AVANZO</th>
            <th class="barras2"></th>
            <th class="avanzo3"></th>
        </tr>
        <tr>
            <th class="avanzo2">CIENCIAS NATURALES PRUEBA AVANZO</th>
            <th class="barras2"></th>
            <th class="avanzo3"></th>
        </tr>
        <tr>
            <th class="avanzo2">ESTUDIOS SOCIALES Y C&Iacute;VICA PRUEBA AVANZO</th>
            <th class="barras2"></th>
            <th class="avanzo3"></th>
        </tr>
        <tr>
            <th class="avanzo2">MATEM&Aacute;TICA PRUEBA AVANZO</th>
            <th class="barras2"></th>
            <th class="avanzo3"></th>
        </tr>
    </table><br><br>

    <?php 
}
    ?>

    <?php 
}
    ?>
    <a download="Boleta de notas" href="/control_de_notas/php/boletas2.php"><input id="Imprimir" type="submit" name="Imprimir" value="Descargar">
</body>
</html>

