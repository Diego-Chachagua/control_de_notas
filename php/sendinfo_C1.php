<?php
include 'conexion.php';
$con=conexion();//conexion con la bd

$nie=$_POST['nie'];//captura el id del estudiante desde formulario en cuadro1
if($nie==""){//evalua si esta vacio
    header("location: cuadro1.php");
}
$act1=$_POST['act1'];
$act2=$_POST['act2'];
$po=$_POST['PO'];
//evaluacion si los campos estan vacios

$seleccion=$_POST['seleccion'];//recupera la eleccion del periodo 
//en base a la eleccion ejecutara los siguientes bloques de codigo  y haran la actualizacion en la BD segun id
if($seleccion=="Periodo 1"){
    if($act1<=10 && $act1!=""){
        $consulta="UPDATE tbl_notas SET act1_p1='$act1' WHERE nie='$nie' AND cod_materia='1'";
        $query=pg_query($con,$consulta);
        header("location: cuadro1.php");
      }else{
        header("location: cuadro1.php");
      }
      if($act2<=10 && $act2!=""){
        $consulta="UPDATE tbl_notas SET act2_p1='$act2' WHERE nie='$nie' AND cod_materia='1'";
        $query=pg_query($con,$consulta);
        header("location: cuadro1.php");
      }else{
        header("location: cuadro1.php");
      }
      if($po<=10 && $po!=""){
        $consulta="UPDATE tbl_notas SET po_p1='$po' WHERE nie='$nie' AND cod_materia='1'";
        $query=pg_query($con,$consulta);
        header("location: cuadro1.php");
      }else{
        header("location: cuadro1.php");
      }

}elseif($seleccion=="Periodo 2"){
  if($act1<=10 && $act1!=""){
    $consulta="UPDATE tbl_notas SET act1_p2='$act1' WHERE nie='$nie' AND cod_materia='1'";
    $query=pg_query($con,$consulta);
    header("location: cuadro1.php");
  }else{
    header("location: cuadro1.php");
  }
  if($act2<=10 && $act2!=""){
    $consulta="UPDATE tbl_notas SET act2_p2='$act2' WHERE nie='$nie' AND cod_materia='1'";
    $query=pg_query($con,$consulta);
    header("location: cuadro1.php");
  }else{
    header("location: cuadro1.php");
  }
  if($po<=10 && $po!=""){
    $consulta="UPDATE tbl_notas SET po_p2='$po' WHERE nie='$nie' AND cod_materia='1'";
    $query=pg_query($con,$consulta);
    header("location: cuadro1.php");
  }else{
    header("location: cuadro1.php");
  }
    
    

}elseif($seleccion=="Periodo 3"){
  if($act1<=10 && $act1!=""){
    $consulta="UPDATE tbl_notas SET act1_p3='$act1' WHERE nie='$nie' AND cod_materia='1'";
    $query=pg_query($con,$consulta);
    header("location: cuadro1.php");
  }else{
    header("location: cuadro1.php");
  }
  if($act2<=10 && $act2!=""){
    $consulta="UPDATE tbl_notas SET act2_p3='$act2' WHERE nie='$nie' AND cod_materia='1'";
    $query=pg_query($con,$consulta);
    header("location: cuadro1.php");
  }else{
    header("location: cuadro1.php");
  }
  if($po<=10 && $po!=""){
    $consulta="UPDATE tbl_notas SET po_p3='$po' WHERE nie='$nie' AND cod_materia='1'";
    $query=pg_query($con,$consulta);
    header("location: cuadro1.php");
  }else{
    header("location: cuadro1.php");
  }
    

}elseif($seleccion=="Periodo 4"){
  if($act1<=10 && $act1!=""){
    $consulta="UPDATE tbl_notas SET act1_p4='$act1' WHERE nie='$nie' AND cod_materia='1'";
    $query=pg_query($con,$consulta);
    header("location: cuadro1.php");
  }else{
    header("location: cuadro1.php");
  }
  if($act2<=10 && $act2!=""){
    $consulta="UPDATE tbl_notas SET act2_p4='$act2' WHERE nie='$nie' AND cod_materia='1'";
    $query=pg_query($con,$consulta);
    header("location: cuadro1.php");
  }else{
    header("location: cuadro1.php");
  }
  if($po<=10 && $po!=""){
    $consulta="UPDATE tbl_notas SET po_p4='$po' WHERE nie='$nie' AND cod_materia='1'";
    $query=pg_query($con,$consulta);
    header("location: cuadro1.php");
  }else{
    header("location: cuadro1.php");
  }
   
    

}elseif($seleccion==""){//si la seleccion es vacio solo volvera a redirigir al cuadro
    header("location: cuadro1.php");

}
//obtiene los valores de los campos de recuperacion y avanzo
$recuperacion_e1=$_POST['R_E1'];
$recuperacion_e2=$_POST['R_E2'];
//evalua si hay campos con datos , si hay hace la actualizacion , de lo contrario no hara nada 
if($recuperacion_e1<=10 && $recuperacion_e1!=""){
    $recuperacion_e1=6;
  $consulta="UPDATE tbl_notas SET re1='$recuperacion_e1' WHERE nie='$nie' AND cod_materia='1' ";
  $query=pg_query($con,$consulta);
  header("location: cuadro1.php");
}else{
  header("location: cuadro1.php");
}
if($recuperacion_e2<=10 && $recuperacion_e2!=""){
    $recuperacion_e2=6;
  $consulta="UPDATE tbl_notas SET re2='$recuperacion_e2' WHERE nie='$nie' AND cod_materia='1'";
  $query=pg_query($con,$consulta);
  header("location: cuadro1.php");
}else{
  header("location: cuadro1.php");
}

