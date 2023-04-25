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
    <link rel="stylesheet" type="text/css" href="/control_de_notas/css/principal.css" media="screen"/>
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
//solicitud de datos a la base
$query = "SELECT nombre_profesor, apellido_profesor FROM tbl_profesor";
$result = pg_query($conn, $query) or die("Error en la consulta: " . pg_last_error());
?>

<table class="tablae" border="3">
  <tr>
    <th class="usuario">Nombre profesor</th>
    <th class="contrasena">Apellido profesor</th>
  </tr>
  <?php
  //condicion para que imprima una tabla con informacion automaticamente
  while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['nombre_profesor'] . "</td>";
    echo "<td>" . $row['apellido_profesor'] . "</td>";
    echo "</tr>";
  }
  ?>
</table>