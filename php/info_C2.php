<?php
include 'conexion.php';
$con= conexion();
//extraer datos desde la base para mostrar en pantalla
$consulta4="SELECT cod_nota, nombre_estudiante, act1 , act2 , po FROM tbl_notas INNER JOIN tbl_estudiante ON tbl_notas.nie = tbl_estudiantes.nie WHERE cod_periodo='1' ";
$query=pg_query($con,$consulta4);