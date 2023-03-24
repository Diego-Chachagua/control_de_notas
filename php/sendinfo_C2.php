<?php
include 'conexion.php';
$con=conexion();

$id=$_POST['id'];
$act1=$_POST['act1'];
$act2=$_POST['act2'];
$po=$_POST['PO'];

$seleccion=$_POST['seleccion'];
if($seleccion=="Periodo 1"){
    if($act1!=""){
        $consulta="UPDATE tbl_notas SET act1_p1='$act1' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }
      if($act2!=""){
        $consulta="UPDATE tbl_notas SET act2_p1='$act2' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }
      if($po!=""){
        $consulta="UPDATE tbl_notas SET po_p1='$po' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }

}elseif($seleccion=="Periodo 2"){
    if($act1!=""){
        $consulta="UPDATE tbl_notas SET act1_p2='$act1' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }
      if($act2!=""){
        $consulta="UPDATE tbl_notas SET act2_p2='$act2' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }
      if($po!=""){
        $consulta="UPDATE tbl_notas SET po_p2='$po' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }
    
    

}elseif($seleccion=="Periodo 3"){
    if($act1!=""){
        $consulta="UPDATE tbl_notas SET act1_p3='$act1' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }
      if($act2!=""){
        $consulta="UPDATE tbl_notas SET act2_p3='$act2' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }
      if($po!=""){
        $consulta="UPDATE tbl_notas SET po_p3='$po' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }
    

}elseif($seleccion=="Periodo 4"){
    if($act1!=""){
        $consulta="UPDATE tbl_notas SET act1_p4='$act1' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }
      if($act2!=""){
        $consulta="UPDATE tbl_notas SET act2_p4='$act2' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }
      if($po!=""){
        $consulta="UPDATE tbl_notas SET po_p4='$po' WHERE cod_nota='$id' ";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }
   
    

}elseif($seleccion==""){

}