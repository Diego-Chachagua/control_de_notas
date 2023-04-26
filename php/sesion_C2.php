<?php
session_start();//sesion activa
if(isset($_COOKIE['dato'])) {
    $materia = $_COOKIE['dato'];
  }else{
      $materia = null;
  }
  echo $materia;

if($_POST['anio']==2 ){//si lo que se ingresa es año 1 redirigir al cuadro de primer añ0
    if($materia == 'MATEMATICA' or $materia == 'CIENCIAS' or $materia == 'SOCIALES' or $materia=='LENGUAJE'){
    $_SESSION['grado']=2;
    
    header('location: cuadro2.php');
    }
    }elseif($_POST['anio']==2 ){//de lo contrario redirigir al cuadro de segundo año
        if($materia == 'INFORMATICA' or $materia== 'INGLES'){
            $_SESSION['grado']=2;
            
            header('location: cuadro1.php');
            }
    }

    if($_POST['anio']==1  ){//si lo que se ingresa es año 1 redirigir al cuadro de primer añ0
        if($materia == 'MATEMATICA' or $materia == 'CIENCIAS' or $materia == 'LENGUAJE' or $materia == 'SOCIALES'){
            $_SESSION['grado']=1;
            
            header('location: cuadro1.php');
            }
    }
  

    if($_POST['anio']==1  ){//si lo que se ingresa es año 1 redirigir al cuadro de primer añ0
        if($materia == 'SEMINARIO' or $materia == 'HPP' or $materia == 'OPLV' or $materia == 'MUCI'){
            $_SESSION['grado']=1;
            
            header('location: cuadro_conceptual.php');
            }
    }elseif($_POST['anio']==2 ){//de lo contrario redirigir al cuadro de segundo año
        if($materia == 'SEMINARIO' or $materia == 'HPP' or $materia == 'OPLV' or $materia == 'MUCI'){
            $_SESSION['grado']=1;
            
            header('location: cuadro_conceptual.php');
            }
    }
    
    //condiciones que evaluan que seccion se ah registrado
    //si seccion es X guardarlo y genera su respectivo codigo de BD para el uso de SELECT en cuadro 2
if($_POST['seccion']=="A"){
    $_SESSION['nombre_seccion']="A";
    $_SESSION['cod_seccion']=1;
}elseif($_POST['seccion']=="F"){
    $_SESSION['nombre_seccion']="F";
    $_SESSION['cod_seccion']=2;
}elseif($_POST['seccion']=="E"){
    $_SESSION['nombre_seccion']="E";
    $_SESSION['cod_seccion']=3;
}elseif($_POST['seccion']=="H"){
    $_SESSION['nombre_seccion']="H";
    $_SESSION['cod_seccion']=4;
}elseif($_POST['seccion']=="G"){
    $_SESSION['nombre_seccion']="G";
    $_SESSION['cod_seccion']=5;
}elseif($_POST['seccion']=="D"){
    $_SESSION['nombre_seccion']="D";
    $_SESSION['cod_seccion']=6;

}








   