<?php
include 'conexion.php';
$con=conexion();

$id=$_POST['id'];
if($id¡=""){ 
    sleep(2);
    echo $id;
}else{
   header("location: cuadro2.php");


}
$act1=$_POST['act1'];
$act2=$_POST['act2'];
$po=$_POST['PO'];

$seleccion=$_POST['seleccion'];
if($seleccion="Periodo 1"){
    
}elseif($seleccion="Periodo 2"){

}elseif($seleccion="Periodo 3"){

}elseif($seleccion="Periodo 4"){

}elseif($seleccion=""){

}