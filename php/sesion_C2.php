<?php
session_start();//sesion activa
if($_POST['anio']==1  ){//si lo que se ingresa es año 1 redirigir al cuadro de primer añ0
    $_SESSION['grado']=1;
    $SESSION['cod_materia'];
    header('location: cuadro1.php');
    }elseif($_POST['anio']==2 ){//de lo contrario redirigir al cuadro de segundo año
        $_SESSION['grado']=2;
        $SESSION['cod_materia'];
        header("location: cuadro2.php");
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




   