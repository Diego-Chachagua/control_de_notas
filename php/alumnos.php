<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="description" content="Sitio web sobre control de notas INCAS">
        <meta name="Keywords" content="Control de notas incas,CONTROL DE NOTAS INCAS,Control De Notas Incas,control de notas incas,incas,Incas,INCAS,&iacute;nstituto nacional cornelio azen&oacute;n Sierra, &Iacute;NSTITUTO NACIONAL CORNELIO AZEN&Oacute;N SIERRA,&Iacute;nstituto Nacional Cornelio Azen&oacute;n Sierra">
        <meta name="author" content="Promoci&oacute;n de bachillerato tecnico vocacional en software año 2023">
        <meta name="copyright" content="Sitio web sobre control de notas INCAS,Promoci&oacute;n de bachillerato tecnico vocacional en software año 2023">
        
        <!--Vinculaación de ficheros externos-->
    <title>Consulta de notas INCAS</title>
    <link rel="shourt icon" href="/control_de_notas/images/incas.png">
    <link rel="stylesheet" type="text/css" href="/control_de_notas/css/extra.css" media="screen"/>
    </head>
<?php
$host = "localhost";
$port = "5432";
$dbname = "notas";
$user = "notasadmin";
$password = "incasnotas";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("Error de conexión: " . pg_last_error());
?>

<?php
$grado = $_POST['grado2'];
$seccion = $_POST['seccion2'];
 ?>

<?php
//solicitud de datos a la base
$query = "SELECT tbl_usuario.usuario_padres, tbl_usuario.contrasena_padres, tbl_padres.nombre_padre, tbl_secciones.cod_seccion, tbl_secciones.seccion, tbl_grado.cod_grado, tbl_grado.grado FROM tbl_usuario INNER JOIN tbl_padres ON tbl_usuario.dui=tbl_padres.dui INNER JOIN tbl_estudiantes ON tbl_padres.dui=tbl_estudiantes.dui INNER JOIN tbl_secciones ON tbl_secciones.cod_seccion=tbl_estudiantes.cod_seccion INNER JOIN tbl_grado ON tbl_estudiantes.cod_grado=tbl_grado.cod_grado where tbl_secciones.seccion='$seccion' and tbl_grado.grado='$grado'";
$result = pg_query($conn, $query) or die("Error en la consulta: " . pg_last_error());
?>

<table class="tablai" border="3">
  <tr>
    <th class="usuario">Usuario</th>
    <th class="contrasena">Contrase&ntilde;a</th>
    <th class="usuario">Nombre del padre</th>
  </tr>
  <?php
  //condicion para que imprima una tabla con informacion automaticamente
  while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['usuario_padres'] . "</td>";
    echo "<td>" . $row['contrasena_padres'] . "</td>";
    echo "<td>" . $row['nombre_padre'] . "</td>";
    echo "</tr>";
  }
  ?>
</table>

<?php
pg_close($conn);
?>
