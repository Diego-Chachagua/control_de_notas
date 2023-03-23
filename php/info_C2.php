<?php
include 'conexion.php';
$con= conexion();
//extraer datos desde la base para mostrar en pantalla
$consulta="SELECT cod_nota, nombre_estudiante, act1_p1, act2_p1, po_p1, act1_p2, act2_p2, po_p2, act1_p3, act2_p3, po_p3, act1_p4, act2_p4, po_p4, re1, avanzo, re2 FROM tbl_notas INNER JOIN tbl_estudiantes ON tbl_notas.nie=tbl_estudiantes.nie ORDER BY cod_nota ASC";
$query=pg_query($con,$consulta);