<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="description" content="Sitio web sobre control de notas INCAS">
        <meta name="Keywords" content="Control de notas incas,CONTROL DE NOTAS INCAS,Control De Notas Incas,control de notas incas,incas,Incas,INCAS,&iacute;nstituto nacional cornelio azen&oacute;n Sierra, &Iacute;NSTITUTO NACIONAL CORNELIO AZEN&Oacute;N SIERRA,&Iacute;nstituto Nacional Cornelio Azen&oacute;n Sierra">
        <meta name="author" content="Promoci&oacute;n de bachillerato tecnico vocacional en software año 2023">
        <meta name="copyright" content="Sitio web sobre control de notas INCAS,Promoci&oacute;n de bachillerato tecnico vocacional en software año 2023">
        
        <!--Vinculaación de ficheros externos-->
    <title>Boleta de notas</title>
    <link rel="shourt icon" href="/control_de_notas/images/incas.png">
    <style>
.info{
    width: 1100px;
}

table{
    background-color: white;
    border-color: #000000;
}

.info1{
    width: 600px;
}

.info2{
    width: 300px;
}

.info3{
    width: 900px;
}

.info4{
    width: 300px;
}

.info5{
    width: 300px;
}

.colarriba1{
    background-color: #7c7e7c;
    width: 350px;
}

.colarriba2{
    background-color: #7c7e7c;
    width: 70px;
}

.colarriba3{
    background-color: #7c7e7c;
    width: 350px;
}

.barras1{
    width: 350px;
    height: 25px;
}

.barras2{
    width: 70px;
    height: 25px;
}

.resultadoa{
    width: 300px;
    background-color: #7c7e7c;
}

    </style>
</head>
<body>
   <br><br><br><br><br><br><br>
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
            <th colspan="5" class="info"></th> 
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
            <th colspan="5" class="info"></th> 
        </tr>
    </table><br><br><br><br><br>
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
        <tr> <?php require '../php/pdf consulta.php';

            while($mostrar=pg_fetch_array($consulta)){
             ?>
            <th class="barras1">LENGUAJE Y LITERATURA</th>
            <th class="barras2"><?php echo $mostrar['prom1']?></th>
            <th class="barras2"><?php echo $mostrar['prom2']?></th>
            <th class="barras2"><?php echo $mostrar['prom3']?></th>
            <th class="barras2"><?php echo $mostrar['prom4']?></th>
            <th class="barras2"><?php echo $mostrar['notainstituto']?></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"><?php echo $mostrar['notafinal']?></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">MATEM&Aacute;TICA</th>
            <th class="barras2"><?php echo $mostrar['prom1']?></th>
            <th class="barras2"><?php echo $mostrar['prom2']?></th>
            <th class="barras2"><?php echo $mostrar['prom3']?></th>
            <th class="barras2"><?php echo $mostrar['prom4']?></th>
            <th class="barras2"><?php echo $mostrar['notainstituto']?></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"><?php echo $mostrar['notafinal']?></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">CIENCIAS NATURALES</th>
            <th class="barras2"><?php echo $mostrar['prom1']?></th>
            <th class="barras2"><?php echo $mostrar['prom2']?></th>
            <th class="barras2"><?php echo $mostrar['prom3']?></th>
            <th class="barras2"><?php echo $mostrar['prom4']?></th>
            <th class="barras2"><?php echo $mostrar['notainstituto']?></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"><?php echo $mostrar['notafinal']?></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">ESTUDIOS SOCIALES Y C&Iacute;VICA</th>
            <th class="barras2"><?php echo $mostrar['prom1']?></th>
            <th class="barras2"><?php echo $mostrar['prom2']?></th>
            <th class="barras2"><?php echo $mostrar['prom3']?></th>
            <th class="barras2"><?php echo $mostrar['prom4']?></th>
            <th class="barras2"><?php echo $mostrar['notainstituto']?></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"><?php echo $mostrar['notafinal']?></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">MORAL URBANIDAD Y C&Iacute;VICA</th>
            <th class="barras2"><?php echo $mostrar['prom1']?></th>
            <th class="barras2"><?php echo $mostrar['prom2']?></th>
            <th class="barras2"><?php echo $mostrar['prom3']?></th>
            <th class="barras2"><?php echo $mostrar['prom4']?></th>
            <th class="barras2"><?php echo $mostrar['notainstituto']?></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"><?php echo $mostrar['notafinal']?></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">IDIOMA EXTRANJERO</th>
            <th class="barras2"><?php echo $mostrar['prom1']?></th>
            <th class="barras2"><?php echo $mostrar['prom2']?></th>
            <th class="barras2"><?php echo $mostrar['prom3']?></th>
            <th class="barras2"><?php echo $mostrar['prom4']?></th>
            <th class="barras2"><?php echo $mostrar['notainstituto']?></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"><?php echo $mostrar['notafinal']?></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">INFORM&Aacute;TICA</th>
            <th class="barras2"><?php echo $mostrar['prom1']?></th>
            <th class="barras2"><?php echo $mostrar['prom2']?></th>
            <th class="barras2"><?php echo $mostrar['prom3']?></th>
            <th class="barras2"><?php echo $mostrar['prom4']?></th>
            <th class="barras2"><?php echo $mostrar['notainstituto']?></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"><?php echo $mostrar['notafinal']?></th>
            <th class="barras1"></th>
        </tr>
        <tr>
            <th class="barras1">ORIENTACI&Oacute;N PARA LA VIDA</th>
            <th class="barras2"><?php echo $mostrar['prom1']?></th>
            <th class="barras2"><?php echo $mostrar['prom2']?></th>
            <th class="barras2"><?php echo $mostrar['prom3']?></th>
            <th class="barras2"><?php echo $mostrar['prom4']?></th>
            <th class="barras2"><?php echo $mostrar['notainstituto']?></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"></th>
            <th class="barras2"><?php echo $mostrar['notafinal']?></th>
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
        <?php
            }
        ?>
    </table>

<?php
$html=ob_get_clean();
//echo $html;
?>
<?php
require_once '../dompdf/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$dompdf->loadHtml($html);

$dompdf->setPaper('A2','letter ');

$dompdf->render();

$dompdf->stream('Boleta de notas.pdf', array('Attachment' => 0));
?>