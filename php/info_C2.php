<?php
include 'conexion.php';
$con= conexion();
//extraer datos desde la base para mostrar en pantalla
$consulta0="SELECT cod_nota, nombre_estudiante FROM tbl_notas INNER JOIN tbl_estudiantes ON tbl_notas.nie = tbl_estudiantes.nie ORDER BY cod_nota ASC";
$query0=pg_query($con,$consulta0);
$consulta="SELECT  act1 , act2 , po FROM tbl_notas  WHERE cod_periodo='1' ";
$query=pg_query($con,$consulta);
$consulta1="SELECT act1 , act2 , po FROM tbl_notas WHERE cod_periodo='2' ";
$query1=pg_query($con,$consulta1);

$consulta2="SELECT  act1 , act2 , po FROM tbl_notas WHERE cod_periodo='3' ";
$query2=pg_query($con,$consulta2);

$consulta3="SELECT  act1 , act2 , po FROM tbl_notas  WHERE cod_periodo='4' ";
$query3=pg_query($con,$consulta3);