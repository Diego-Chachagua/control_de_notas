<?php
include 'conexion.php';
$con= conexion();
//extraer datos desde la base para mostrar en pantalla
$consulta4="SELECT nie, nombre_estudiante, act1 , act2 , po FROM tbl_notas INNER JOIN tbl_estudiante ON tbl_notas.nie = tbl_estudiantes.nie WHERE cod_periodo='1' AND cod_materia = '$Cmateria' AND cod_seccion = '$seccion' AND codigo_grado='$codGrado' ";
$consulta5="SELECT  act1 , act2 , po FROM tbl_notas WHERE cod_periodo='2' AND cod_materia = '$Cmateria' AND cod_seccion='$seccion' AND codigo_grado='$codGrado'  ";
$consulta6="SELECT  act1 , act2 , po FROM tbl_notas  WHERE cod_periodo='3' AND cod_materia = '$Cmateria' AND cod_seccion='$seccion' AND codigo_grado='$codGrado' ";
$consulta7="SELECT  act1 , act2 , po FROM tbl_notas  WHERE cod_periodo='4' AND cod_materia = '$Cmateria' AND cod_seccion='$seccion' AND codigo_grado='$codGrado' ";
$consulta8="SELECT re1, re2 , avanzo FROM tbl_notas  WHERE cod_materia = '$Cmateria' AND cod_seccion='$seccion' AND codigo_grado='$codGrado'  ";




//Inicio de extración 
//extraer datos desde el cuadro del segundo año
$nie=$_POST['nie'];
$act1=$_POST['act1'];
$act2=$_POST['act2'];
$PO=$_POST['PO'];
$select=$_POST['seleccion'];
if($select=="Periodo 1"){
    $option="1";
}elseif($select=="Periodo 2"){
    $option="2";   
}elseif($select=="Periodo 3"){
    $option="3";
}elseif($select=="Periodo 4"){
    $option="4";
}elseif($select==""){
    $option="";
}


//extraer datos de la prueba extraordinaria del cuadro del segundo año
if(isset($_POST['R_E1'])){
    $R_E1=$_POST['R_E1'];
    $consulta0="UPDATE tbl_notas SET re1='$R_E1' WHERE nie='$nie' AND cod_materia='$Cmateria'";
    $query4=pg_query($con,$consulta0);
   
}
if(isset($_POST['R_E2'])){
    $R_E2=$_POST['R_E2'];
    
    $consulta1="UPDATE tbl_notas SET re2='$R_E2' WHERE nie='$nie' AND cod_materia='$Cmateria'";
    $query5=pg_query($con,$consulta1);
    
}
if(isset($_POST['avanzo'])){
    $avanzo=$_POST['avanzo'];
    $consulta2="UPDATE tbl_notas SET avanzo='$avanzo' WHERE nie='$nie' AND cod_materia='$Cmateria'";
    $query6=pg_query($con,$consulta2);
   
}

//array con inserciones de datos
$consulta=array("UPDATE tbl_notas SET act1='$act1', cod_periodo='$option' WHERE nie='$nie' AND cod_materias='$Cmateria'",
"UPDATE tbl_notas SET act2='$act2', cod_periodo='$option' WHERE nie='$nie' AND cod_materias='$Cmateria'",
"UPDATE tbl_notas SET po='$PO', cod_periodo='$option' WHERE nie='$nie' AND cod_materias='$Cmateria'"
);

$query1=pg_query($con,$consulta[0]);
$query2=pg_query($con,$consulta[1]);
$query3=pg_query($con,$consulta[2]);