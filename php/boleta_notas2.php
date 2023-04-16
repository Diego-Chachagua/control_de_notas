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
$consulta = "SELECT nie FROM tbl_estudiantes where dui='$dui'";
$result100 = pg_query($conn, $consulta) or die("Error en la consulta: " . pg_last_error());
if($mostrar100=pg_fetch_assoc($result100)){
$nie = $mostrar100['nie']
 ?>

 <?php
}
?>

<?php
//solicitud de datos a la base materia lenguaje
$query = "SELECT tbl_estudiantes.dui, tbl_estudiantes.nie, tbl_estudiantes.nombre_estudiante, tbl_estudiantes.apellido_estudiante, tbl_estudiantes.cod_grado, tbl_secciones.seccion, tbl_materias.cod_materia, tbl_promedio.promedio_p1, tbl_promedio.promedio_p2, tbl_promedio.promedio_p3, tbl_promedio.promedio_p4, tbl_promedio.promedio_f, tbl_promedio.promedio_r, tbl_promedio.promedio_t FROM tbl_estudiantes INNER JOIN tbl_secciones ON tbl_secciones.cod_seccion=tbl_estudiantes.cod_seccion INNER JOIN tbl_promedio ON tbl_estudiantes.nie=tbl_promedio.nie INNER JOIN tbl_materias ON tbl_promedio.cod_materia=tbl_materias.cod_materia where tbl_estudiantes.nie='$nie' and tbl_estudiantes.dui='$dui'";
$result = pg_query($conn, $query) or die("Error en la consulta: " . pg_last_error());
if($mostrar=pg_fetch_assoc($result)){

//solicitud de datos a la base materia matematica
$query1 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=2";
$result1 = pg_query($conn, $query1) or die("Error en la consulta: " . pg_last_error());
if($mostrar1=pg_fetch_assoc($result1)) {

//solicitud de datos a la base materia ciencia
$query2 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=3";
$result2 = pg_query($conn, $query2) or die("Error en la consulta: " . pg_last_error());
if($mostrar2=pg_fetch_assoc($result2)){

//solicitud de datos a la base materia sociales
$query3 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=4";
$result3 = pg_query($conn, $query3) or die("Error en la consulta: " . pg_last_error());
if($mostrar3=pg_fetch_assoc($result3)){

//solicitud de datos a la base materia muci
$query4 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=5";
$result4 = pg_query($conn, $query4) or die("Error en la consulta: " . pg_last_error());
if($mostrar4=pg_fetch_assoc($result4)){

//solicitud de datos a la base materia muci
$query5 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=6";
$result5 = pg_query($conn, $query5) or die("Error en la consulta: " . pg_last_error());
if($mostrar5=pg_fetch_assoc($result5)){

//solicitud de datos a la base materia informatica
$query6 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=7";
$result6 = pg_query($conn, $query6) or die("Error en la consulta: " . pg_last_error());
if($mostrar6=pg_fetch_assoc($result6)){

//solicitud de datos a la base materia orientacion para la vida
$query7 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=8";
$result7 = pg_query($conn, $query7) or die("Error en la consulta: " . pg_last_error());
if($mostrar7=pg_fetch_assoc($result7)){

//solicitud de datos a la base materia seminarios
$query8 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=9";
$result8 = pg_query($conn, $query8) or die("Error en la consulta: " . pg_last_error());
if($mostrar8=pg_fetch_assoc($result8)){

//solicitud de datos a la base materia habilitacion laboral
$query9 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=10";
$result9 = pg_query($conn, $query9) or die("Error en la consulta: " . pg_last_error());
if($mostrar9=pg_fetch_assoc($result9)){

//solicitud de datos a la base materia habilitacion laboral
$query10 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=11";
$result10 = pg_query($conn, $query10) or die("Error en la consulta: " . pg_last_error());
if($mostrar10=pg_fetch_assoc($result10)){

//solicitud de datos a la base materia ACTITUDES LABORALES
$query11 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=12";
$result11 = pg_query($conn, $query11) or die("Error en la consulta: " . pg_last_error());
if($mostrar11=pg_fetch_assoc($result11)){

//solicitud de datos a la base materia SE EXPRESA Y PARTICPA CON RESPETO
$query12 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=13";
$result12 = pg_query($conn, $query12) or die("Error en la consulta: " . pg_last_error());
if($mostrar12=pg_fetch_assoc($result12)){

//solicitud de datos a la base materia SE EXPRESA Y PARTICPA CON RESPETO
$query13 = "SELECT  cod_materia, promedio_p1, promedio_p2, promedio_p3, promedio_p4, promedio_f, promedio_r, promedio_t FROM tbl_promedio where nie='$nie' and cod_materia=14";
$result13 = pg_query($conn, $query13) or die("Error en la consulta: " . pg_last_error());
if($mostrar13=pg_fetch_assoc($result13)){

$query14 = "SELECT  re1, re2, avanzo, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=1";
$result14 = pg_query($conn, $query14) or die("Error en la consulta: " . pg_last_error());
if($mostrar14=pg_fetch_assoc($result14)){

$query15 = "SELECT  re1, re2, avanzo, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=2";
$result15 = pg_query($conn, $query15) or die("Error en la consulta: " . pg_last_error());
if($mostrar15=pg_fetch_assoc($result15)){

$query16 = "SELECT  re1, re2, avanzo, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=3";
$result16 = pg_query($conn, $query16) or die("Error en la consulta: " . pg_last_error());
if($mostrar16=pg_fetch_assoc($result16)){

$query17 = "SELECT  re1, re2, avanzo, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=4";
$result17 = pg_query($conn, $query17) or die("Error en la consulta: " . pg_last_error());
if($mostrar17=pg_fetch_assoc($result17)){    

$query18 = "SELECT  re1, re2, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=5";
$result18 = pg_query($conn, $query18) or die("Error en la consulta: " . pg_last_error());
if($mostrar18=pg_fetch_assoc($result18)){
    
$query19 = "SELECT  re1, re2, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=6";
$result19 = pg_query($conn, $query19) or die("Error en la consulta: " . pg_last_error());
if($mostrar19=pg_fetch_assoc($result19)){   

$query20 = "SELECT  re1, re2, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=7";
$result20 = pg_query($conn, $query20) or die("Error en la consulta: " . pg_last_error());
if($mostrar20=pg_fetch_assoc($result20)){  

$query21 = "SELECT  re1, re2, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=8";
$result21 = pg_query($conn, $query21) or die("Error en la consulta: " . pg_last_error());
if($mostrar21=pg_fetch_assoc($result21)){ 

$query22 = "SELECT  re1, re2, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=9";
$result22 = pg_query($conn, $query22) or die("Error en la consulta: " . pg_last_error());
if($mostrar22=pg_fetch_assoc($result22)){ 

$query23 = "SELECT  re1, re2, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=10";
$result23 = pg_query($conn, $query23) or die("Error en la consulta: " . pg_last_error());
if($mostrar23=pg_fetch_assoc($result23)){ 

$query24 = "SELECT  re1, re2, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=11";
$result24 = pg_query($conn, $query24) or die("Error en la consulta: " . pg_last_error());
if($mostrar24=pg_fetch_assoc($result24)){ 

$query25 = "SELECT  re1, re2, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=12";
$result25 = pg_query($conn, $query25) or die("Error en la consulta: " . pg_last_error());
if($mostrar25=pg_fetch_assoc($result25)){ 

$query26 = "SELECT  re1, re2, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=13";
$result26 = pg_query($conn, $query26) or die("Error en la consulta: " . pg_last_error());
if($mostrar26=pg_fetch_assoc($result26)){ 

$query27 = "SELECT  re1, re2, cod_materia FROM tbl_notas where nie='$nie' and cod_materia=14";
$result27 = pg_query($conn, $query27) or die("Error en la consulta: " . pg_last_error());
if($mostrar27=pg_fetch_assoc($result27)){ 

$query28 = "SELECT  tbl_anio.anio, tbl_anio.cod_anio, tbl_estudiantes.nie FROM tbl_anio INNER JOIN tbl_estudiantes ON tbl_anio.cod_anio=tbl_estudiantes.cod_anio where nie='$nie'";
$result28 = pg_query($conn, $query28) or die("Error en la consulta: " . pg_last_error());
if($mostrar28=pg_fetch_assoc($result28)){
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
            <th class="tablag">Grado</th>
            <th class="info1"><?php echo $mostrar['cod_grado'] ?></th>
            <th class="info2">Secci&oacute;n</th>
            <th class="info3"><?php echo $mostrar['seccion'] ?></th>
            <th class="info4">A&ntilde;o</th>
            <th class="info5"><?php echo $mostrar28['anio'] ?></th>
        </tr>
        <tr>
            <th class="tablag">Estudiante</th>
            <th colspan="5" class="info"><?php echo $mostrar['nombre_estudiante']." ".$mostrar['apellido_estudiante']." "."Nie:".$mostrar['nie'] ?></th>  
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
            <th class="barras2">
            <?php
            //mostrar notas del estudiante y si no tiene se le dara el valor cero
            if($mostrar['cod_materia']==1){
             echo $mostrar['promedio_p1']
             ?></th>
             <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>
           
            <th class="barras2">
            <?php
            if($mostrar['cod_materia']==1){
             echo $mostrar['promedio_p2']
             ?></th>
             <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">
            <?php
            if($mostrar['cod_materia']==1){
             echo $mostrar['promedio_p3']
             ?></th>
             <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">
            <?php
            if($mostrar['cod_materia']==1){
             echo $mostrar['promedio_p4']
             ?></th>
             <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar['cod_materia']==1){
             echo $mostrar['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar14['cod_materia']==1){
             echo $mostrar14['re1']
             ?></th>
             <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar14['cod_materia']==1){
             echo $mostrar14['re2']
             ?></th>
             <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar['cod_materia']==1){
             echo $mostrar['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>

        <tr>
            <th class="barras1">MATEM&Aacute;TICA</th>

            <th class="barras2">
            <?php
            if($mostrar1['promedio_p1']>0){
                echo $mostrar1['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>

            <th class="barras2">
            <?php
            if($mostrar1['promedio_p2']>0){
                echo $mostrar1['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>


            <th class="barras2">
            <?php
            if($mostrar1['promedio_p3']>0){
                echo $mostrar1['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar1['promedio_p4']>0){
                echo $mostrar1['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar1['cod_materia']==2){
             echo $mostrar1['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar15['cod_materia']==2){
             echo $mostrar15['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar15['cod_materia']==2){
             echo $mostrar15['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar1['cod_materia']==2){
             echo $mostrar1['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar1['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>

        <tr>
            <th class="barras1">CIENCIAS NATURALES</th>

            <th class="barras2">
            <?php
            if($mostrar2['promedio_p1']>0){
                echo $mostrar2['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar2['promedio_p2']>0){
                echo $mostrar2['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar2['promedio_p3']>0){
                echo $mostrar2['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar2['promedio_p4']>0){
                echo $mostrar2['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar2['cod_materia']==3){
             echo $mostrar2['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar16['cod_materia']==3){
             echo $mostrar16['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar16['cod_materia']==3){
             echo $mostrar16['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar2['cod_materia']==3){
             echo $mostrar2['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar2['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>

        <tr>
            <th class="barras1">ESTUDIOS SOCIALES Y C&Iacute;VICA</th>
            <th class="barras2">
            <?php
            if($mostrar3['promedio_p1']>0){
                echo $mostrar3['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar3['promedio_p2']>0){
                echo $mostrar3['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar3['promedio_p3']>0){
                echo $mostrar3['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar3['promedio_p4']>0){
                echo $mostrar3['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar3['cod_materia']==4){
             echo $mostrar3['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar17['cod_materia']==4){
             echo $mostrar17['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar17['cod_materia']==4){
             echo $mostrar17['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar3['cod_materia']==4){
             echo $mostrar3['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar3['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
        <tr>
            <th class="barras1">MORAL URBANIDAD Y C&Iacute;VICA</th>
            <th class="barras2">
            <?php
            if($mostrar4['promedio_p1']>0){
                echo $mostrar4['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar4['promedio_p2']>0){
                echo $mostrar4['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar4['promedio_p3']>0){
                echo $mostrar4['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar4['promedio_p4']>0){
                echo $mostrar4['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar4['cod_materia']==5){
             echo $mostrar4['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">
            <?php
            if($mostrar18['cod_materia']==5){
             echo $mostrar18['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar18['cod_materia']==5){
             echo $mostrar18['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar4['cod_materia']==5){
             echo $mostrar4['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar4['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
        <tr>
            <th class="barras1">IDIOMA EXTRANJERO</th>
            <th class="barras2">
            <?php
            if($mostrar5['promedio_p1']>0){
                echo $mostrar5['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar5['promedio_p2']>0){
                echo $mostrar5['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar5['promedio_p3']>0){
                echo $mostrar5['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar5['promedio_p4']>0){
                echo $mostrar5['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar5['cod_materia']==6){
             echo $mostrar5['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">
            <?php
            if($mostrar19['cod_materia']==6){
             echo $mostrar19['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar19['cod_materia']==6){
             echo $mostrar19['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar5['cod_materia']==6){
             echo $mostrar5['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar5['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
        <tr>
            <th class="barras1">INFORM&Aacute;TICA</th>
            <th class="barras2">
            <?php
            if($mostrar6['promedio_p1']>0){
                echo $mostrar6['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar6['promedio_p2']>0){
                echo $mostrar6['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar6['promedio_p3']>0){
                echo $mostrar6['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar6['promedio_p4']>0){
                echo $mostrar6['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar6['cod_materia']==7){
             echo $mostrar6['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">
            <?php
            if($mostrar20['cod_materia']==7){
             echo $mostrar20['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar20['cod_materia']==7){
             echo $mostrar20['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar6['cod_materia']==7){
             echo $mostrar6['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar6['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>

        <tr>
            <th class="barras1">ORIENTACI&Oacute;N PARA LA VIDA</th>
            <th class="barras2">
            <?php
            if($mostrar7['promedio_p1']>0){
                echo $mostrar7['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar7['promedio_p2']>0){
                echo $mostrar7['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2"> 
            <?php
            if($mostrar7['promedio_p3']>0){
                echo $mostrar7['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>
            
            <th class="barras2">
            <?php
            if($mostrar7['promedio_p4']>0){
                echo $mostrar7['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar7['cod_materia']==8){
             echo $mostrar7['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">
            <?php
            if($mostrar21['cod_materia']==8){
             echo $mostrar21['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar21['cod_materia']==8){
             echo $mostrar21['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar7['cod_materia']==8){
             echo $mostrar7['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar7['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
        <tr>
            <th class="barras1">SEMINARIOS</th>
            <th class="barras2">
            <?php
            if($mostrar8['promedio_p1']>0){
                echo $mostrar8['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar8['promedio_p2']>0){
                echo $mostrar8['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar8['promedio_p3']>0){
                echo $mostrar8['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar8['promedio_p4']>0){
                echo $mostrar8['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar8['cod_materia']==9){
             echo $mostrar8['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar22['cod_materia']==9){
             echo $mostrar22['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar22['cod_materia']==9){
             echo $mostrar22['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar8['cod_materia']==9){
             echo $mostrar8['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar8['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
        <tr>
            <th class="barras1">CURSOS DE HABILITACI&Oacute;N LABORAL</th>
            <th class="barras2">
            <?php
            if($mostrar9['promedio_p1']>0){
                echo $mostrar9 ['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar9['promedio_p2']>0){
                echo $mostrar9 ['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar9['promedio_p3']>0){
                echo $mostrar9 ['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar9['promedio_p4']>0){
                echo $mostrar9 ['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">
            <?php
            if($mostrar9['cod_materia']==10){
             echo $mostrar9['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">
            <?php
            if($mostrar23['cod_materia']==10){
             echo $mostrar23['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar23['cod_materia']==10){
             echo $mostrar23['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar9['cod_materia']==10){
             echo $mostrar9['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar9['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>

        <tr>
            <th class="barras1">EVIDENCIA ACTITUDES FAVORABLES PARA LA CONVIVENCIA Y CULTURA DE PAZ</th>
            <th class="barras2">
            <?php
            if($mostrar10['promedio_p1']>0){
                echo $mostrar10['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar10['promedio_p2']>0){
                echo $mostrar10['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar10['promedio_p3']>0){
                echo $mostrar10['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar10['promedio_p4']>0){
                echo $mostrar10['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar10['cod_materia']==11){
             echo $mostrar10['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">
            <?php
            if($mostrar24['cod_materia']==11){
             echo $mostrar24['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar24['cod_materia']==11){
             echo $mostrar24['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar10['cod_materia']==11){
             echo $mostrar10['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar10['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
        <tr>
            <th class="barras1">TOMA DESICIONES DE FORMA A&Uacute;TONOMA Y RESPONSABLE</th>
            <th class="barras2">
            <?php
            if($mostrar11['promedio_p1']>0){
                echo $mostrar11['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar11['promedio_p2']>0){
                echo $mostrar11['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar11['promedio_p3']>0){
                echo $mostrar11['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar11['promedio_p4']>0){
                echo $mostrar11['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar11['cod_materia']==12){
             echo $mostrar11['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar25['cod_materia']==12){
             echo $mostrar25['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar25['cod_materia']==12){
             echo $mostrar25['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar11['cod_materia']==12){
             echo $mostrar11['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar11['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
        <tr>
            <th class="barras1">SE EXPRESA Y PARTICPA CON RESPETO</th>
            <th class="barras2">
            <?php
            if($mostrar12['promedio_p1']>0){
                echo $mostrar12['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar12['promedio_p2']>0){
                echo $mostrar12['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar12['promedio_p3']>0){
                echo $mostrar12['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar12['promedio_p4']>0){
                echo $mostrar12['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar['cod_materia']==13){
             echo $mostrar12['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">
            <?php
            if($mostrar26['cod_materia']==13){
             echo $mostrar26['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar26['cod_materia']==13){
             echo $mostrar26['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>

            <th class="barras2">
            <?php
            if($mostrar12['cod_materia']==13){
             echo $mostrar12['promedio_t']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras1">
            <?php 
            if($mostrar12['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
        <tr>
            <th class="barras1">MUESTRA SENTIDO DE PERTENENCIA Y RESPETO POR NUESTRA CULTURA</th>
            <th class="barras2">
            <?php
            if($mostrar13['promedio_p1']>0){
                echo $mostrar13['promedio_p1']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar13['promedio_p2']>0){
                echo $mostrar13['promedio_p2']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar13['promedio_p3']>0){
                echo $mostrar13['promedio_p3']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>
            
            <th class="barras2">
            <?php
            if($mostrar13['promedio_p4']>0){
                echo $mostrar13['promedio_p4']
             ?>
            </th>
            <?php
            }else{ 
                echo 0
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2"> <?php
            if($mostrar13['cod_materia']==14){
             echo $mostrar13['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras2">
            <?php
            if($mostrar27['cod_materia']==14){
             echo $mostrar27['re1']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>
            <th class="barras2">
            <?php
            if($mostrar27['cod_materia']==14){
             echo $mostrar27['re2']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="barras2">0</th>

            <th class="barras2">
            <?php
            if($mostrar13['cod_materia']==14){
             echo $mostrar13['promedio_f']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>

            <th class="barras1">
            <?php 
            if($mostrar13['promedio_t']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
    </table><br><br>
    <h1 class="neon" data-text="ESTO SOLO APLICA PARA ESTUDIANTES DE SEGUNDO A&ntilde;O">ESTO SOLO APLICA PARA ESTUDIANTES DE SEGUNDO A&Ntilde;O</h1>
    <table border="3">
        <tr>
            <th class="avanzo1">Componente plan estudio</th>
            <th class="colarriba2">NF</th>
            <th class="resultadoa">Resultado</th>
        </tr>
        <tr>
            <th class="avanzo2">LENGUAJE Y LITERATURA PRUEBA AVANZO</th>
            <th class="barras2">
            <?php
            if($mostrar14['cod_materia']==1){
             echo $mostrar14['avanzo']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="avanzo3">
            <?php 
            if($mostrar14['avanzo']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
        <tr>
            <th class="avanzo2">CIENCIAS NATURALES PRUEBA AVANZO</th>
            <th class="barras2">
            <?php
            if($mostrar16['cod_materia']==3){
             echo $mostrar16['avanzo']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="avanzo3">
            <?php 
            if($mostrar16['avanzo']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
        <tr>
            <th class="avanzo2">ESTUDIOS SOCIALES Y C&Iacute;VICA PRUEBA AVANZO</th>
            <th class="barras2">
            <?php
            if($mostrar17['cod_materia']==4){
             echo $mostrar17['avanzo']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="avanzo3">
            <?php 
            if($mostrar17['avanzo']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
        <tr>
            <th class="avanzo2">MATEM&Aacute;TICA PRUEBA AVANZO</th>
            <th class="barras2">
            <?php
            if($mostrar15['cod_materia']==2){
             echo $mostrar15['avanzo']
             ?></th>
             <?php
            }else{ 
                echo '';
            ?>
            <?php
            }
            ?>
            </th>
            <th class="avanzo3">
            <?php 
            if($mostrar15['avanzo']>=6){//si el promedio final es mayor a 6 mostrara en pantalla aprovado
            echo " <h1 class='aprobado'>APROBADO</h1>";
            }else{
            echo "<h1 class='reprobado'>REPROBADO</h1>";
            }?>
            </th>
        </tr>
    </table><br><br>

    <?php 
}
    ?>

    <?php 
}
    ?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>

<?php 
}
?>
<a download="Boleta de notas" href="/control_de_notas/php/boletas2.php"><input id="Imprimir" type="submit" name="Imprimir" value="Descargar">
</body>
</html>


