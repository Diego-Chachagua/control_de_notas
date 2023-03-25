<?php
session_start();
if($_POST['anio']==1  ){
    $_SESSION['grado']=1;
    }elseif($_POST['anio']==2 ){
        $_SESSION['grado']=2;
    }
if($_POST[''])



    header("location: cuadro2.php");