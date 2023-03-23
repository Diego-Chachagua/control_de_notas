<?php
include 'conexion.php';
$con= conexion();
//extraer datos desde la base para mostrar en pantalla

$consulta="SELECT cod_nota, nombre_estudiante, act1 , act2 , po FROM tbl_notas  INNER JOIN tbl_estudiantes ON tbl_notas.nie=tbl_estudiantes.nie WHERE cod_periodo='1' ORDER BY cod_nota ASC";
$query=pg_query($con,$consulta);
$consulta1="SELECT cod_nota, nombre_estudiante, act1 , act2 , po FROM tbl_notas  INNER JOIN tbl_estudiantes ON tbl_notas.nie=tbl_estudiantes.nie WHERE cod_periodo='2' ORDER BY cod_nota ASC ";
$query1=pg_query($con,$consulta1);

$consulta2="SELECT  cod_nota, nombre_estudiante, act1 , act2 , po FROM tbl_notas  INNER JOIN tbl_estudiantes ON tbl_notas.nie=tbl_estudiantes.nie WHERE cod_periodo='3' ORDER BY cod_nota ASC";
$query2=pg_query($con,$consulta2);

$consulta3="SELECT cod_nota, nombre_estudiante, act1 , act2 , po FROM tbl_notas  INNER JOIN tbl_estudiantes ON tbl_notas.nie=tbl_estudiantes.nie WHERE cod_periodo='4' ORDER BY cod_nota ASC";
$query3=pg_query($con,$consulta3);