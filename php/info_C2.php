<?php
include 'conexion.php';
$con= conexion();

//extraer datos desde el cuadro 2
$nie=$_POST['nie'];
$act1=$_POST['act1'];
$act2=$_POST['act2'];
$PO=$_POST['PO'];
$select=$_POST['seleccion'];
if($select=="Periodo 1"){
    $option="Periodo1";
}elseif($select=="Periodo 2"){
    $option="Periodo2";   
}elseif($select=="Periodo 3"){
    $option="Periodo3";
}elseif($select=="Periodo 4"){
    $option="Periodo4";
}

//extraer datos de la prueba extraordinaria
if(isset($_POST['R_E1'])){
    $P_E1=$_POST['R_E1'];
}
if(isset($_POST['R_E2'])){
    $P_E1=$_POST['R_E2'];
}

