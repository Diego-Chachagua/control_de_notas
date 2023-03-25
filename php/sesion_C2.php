<?php
session_start();
if($_POST['anio']==1  ){
    $_SESSION['grado']=1;
    header('location: cuadro1.php');
    }elseif($_POST['anio']==2 ){
        $_SESSION['grado']=2;
        header("location: cuadro2.php");
    }
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




   