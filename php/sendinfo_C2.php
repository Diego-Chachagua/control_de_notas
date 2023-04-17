<?php
include 'conexion.php';
$con=conexion();//conexion con la bd
if(isset($_COOKIE['dato'])) {
  $nombre_materia = $_COOKIE['dato'];
}else{
    $nombre_materia = null;
}

//Evaluea y asigna el código de la materia
if($nombre_materia == "CIENCIAS"){
    $cod_materia = 3;
}

if($nombre_materia == "SOCIALES"){
    $cod_materia = 4;
}

if($nombre_materia == "MATEMATICA"){
    $cod_materia = 2;
}

if($nombre_materia == "LENGUAJE"){
    $cod_materia = 1;
}

if($nombre_materia == "OPLV"){
    $cod_materia = 8;
}

if($nombre_materia == "MUCI"){
    $cod_materia = 5;
}

if($nombre_materia == "INFORMATICA"){
    $cod_materia = 7;
}

if($nombre_materia == "HPP"){
    $cod_materia = 10;
}

if($nombre_materia == "SEMINARIO"){
    $cod_materia = 9;
}

if($nombre_materia == "INGLES"){
    $cod_materia = 6;
}
$nie=$_POST['nie'];//captura el id del estudiante desde formulario en cuadro2
$buscar="SELECT nie FROM tbl_estudiantes WHERE nie='$nie'";
$query2=pg_query($con,$buscar);
while($col1=pg_fetch_array($query2)){
  $nie_Estudiante=$col1['nie'];
}
if($nie==""){
  echo "<script type='text/javascript'>
        var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
        w.document.open();
        w.document.write('<center><br><h1>¡NIE no ingresado!</h1><h2>Ingrese el codigo del maestro correctamente</h2></center>'); 
        w.document.close();
       </script> ";
        sleep(2);
        echo "<script>
        window.location.href = 'cuadro2.php';
        </script>";
}elseif($nie_Estudiante!=$nie){//evalua si esta vacio
  echo "<script type='text/javascript'>
  var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
  w.document.open();
  w.document.write('<center><br><h1>¡NIE no encontrado !</h1><h2>Ingrese el codigo del maestro correctamente</h2></center>'); 
  w.document.close();
 </script> ";
  sleep(2);
  echo "<script>
  window.location.href = 'cuadro2.php';
  </script>";
}elseif($nie!="" && $nie_Estudiante==$nie){
$act1=$_POST['act1'];
$act2=$_POST['act2'];
$po=$_POST['PO'];
//evaluacion si los campos estan vacios

$seleccion=$_POST['seleccion'];//recupera la eleccion del periodo 
//en base a la eleccion ejecutara los siguientes bloques de codigo  y haran la actualizacion en la BD segun id
if($seleccion=="Periodo 1"){
    if($act1<=10 && $act1!=""){
        $consulta="UPDATE tbl_notas SET act1_p1='$act1' WHERE nie='$nie' AND cod_materia='$cod_materia'";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }else{
        header("location: cuadro2.php");
      }
      if($act2<=10 && $act2!=""){
        $consulta="UPDATE tbl_notas SET act2_p1='$act2' WHERE nie='$nie' AND cod_materia='$cod_materia'";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }else{
        header("location: cuadro2.php");
      }
      if($po<=10 && $po!=""){
        $consulta="UPDATE tbl_notas SET po_p1='$po' WHERE nie='$nie' AND cod_materia='$cod_materia'";
        $query=pg_query($con,$consulta);
        header("location: cuadro2.php");
      }else{
        header("location: cuadro2.php");
      }

}elseif($seleccion=="Periodo 2"){
  if($act1<=10 && $act1!=""){
    $consulta="UPDATE tbl_notas SET act1_p2='$act1' WHERE nie='$nie' AND cod_materia='$cod_materia'";
    $query=pg_query($con,$consulta);
    header("location: cuadro2.php");
  }else{
    header("location: cuadro2.php");
  }
  if($act2<=10 && $act2!=""){
    $consulta="UPDATE tbl_notas SET act2_p2='$act2' WHERE nie='$nie' AND cod_materia='$cod_materia'";
    $query=pg_query($con,$consulta);
    header("location: cuadro2.php");
  }else{
    header("location: cuadro2.php");
  }
  if($po<=10 && $po!=""){
    $consulta="UPDATE tbl_notas SET po_p2='$po' WHERE nie='$nie' AND cod_materia='$cod_materia'";
    $query=pg_query($con,$consulta);
    header("location: cuadro2.php");
  }else{
    header("location: cuadro2.php");
  }
    
    

}elseif($seleccion=="Periodo 3"){
  if($act1<=10 && $act1!=""){
    $consulta="UPDATE tbl_notas SET act1_p3='$act1' WHERE nie='$nie' AND cod_materia='$cod_materia'";
    $query=pg_query($con,$consulta);
    header("location: cuadro2.php");
  }else{
    header("location: cuadro2.php");
  }
  if($act2<=10 && $act2!=""){
    $consulta="UPDATE tbl_notas SET act2_p3='$act2' WHERE nie='$nie' AND cod_materia='$cod_materia'";
    $query=pg_query($con,$consulta);
    header("location: cuadro2.php");
  }else{
    header("location: cuadro2.php");
  }
  if($po<=10 && $po!=""){
    $consulta="UPDATE tbl_notas SET po_p3='$po' WHERE nie='$nie' AND cod_materia='$cod_materia'";
    $query=pg_query($con,$consulta);
    header("location: cuadro2.php");
  }else{
    header("location: cuadro2.php");
  }
    

}elseif($seleccion=="Periodo 4"){
  if($act1<=10 && $act1!=""){
    $consulta="UPDATE tbl_notas SET act1_p4='$act1' WHERE nie='$nie' AND cod_materia='$cod_materia'";
    $query=pg_query($con,$consulta);
    header("location: cuadro2.php");
  }else{
    header("location: cuadro2.php");
  }
  if($act2<=10 && $act2!=""){
    $consulta="UPDATE tbl_notas SET act2_p4='$act2' WHERE nie='$nie' AND cod_materia='$cod_materia'";
    $query=pg_query($con,$consulta);
    header("location: cuadro2.php");
  }else{
    header("location: cuadro2.php");
  }
  if($po<=10 && $po!=""){
    $consulta="UPDATE tbl_notas SET po_p4='$po' WHERE nie='$nie' AND cod_materia='$cod_materia'";
    $query=pg_query($con,$consulta);
    header("location: cuadro2.php");
  }else{
    header("location: cuadro2.php");
  }
   
    

}elseif($seleccion==""){//si la seleccion es vacio solo volvera a redirigir al cuadro
    header("location: cuadro2.php");

}
//obtiene los valores de los campos de recuperacion y avanzo
$recuperacion_e1=$_POST['R_E1'];
$recuperacion_e2=$_POST['R_E2'];
$avanzo=$_POST['avanzo'];
//evalua si hay campos con datos , si hay hace la actualizacion , de lo contrario no hara nada 
if($recuperacion_e1<=10 && $recuperacion_e1!=""){
  $recuperacion_e1=6;
  $consulta="UPDATE tbl_notas SET re1='$recuperacion_e1' WHERE nie='$nie' AND cod_materia='$cod_materia' ";
  $query=pg_query($con,$consulta);
  header("location: cuadro2.php");
}else{
  header("location: cuadro2.php");
}
if($recuperacion_e2<=10 && $recuperacion_e2!=""){
  $recuperacion_e2=6;
  $consulta="UPDATE tbl_notas SET re2='$recuperacion_e2' WHERE nie='$nie' AND cod_materia='$cod_materia'";
  $query=pg_query($con,$consulta);
  header("location: cuadro2.php");
}else{
  header("location: cuadro2.php");
}
if($avanzo<=10 && $avanzo!=""){
  $consulta="UPDATE tbl_notas SET avanzo='$avanzo' WHERE nie='$nie' AND cod_materia='$cod_materia'";
  $query=pg_query($con,$consulta);
  header("location: cuadro2.php");
}else{
  header("location: cuadro2.php");
}
}