<?php
//fin de funcionalidad de bloque para el ingreso de datos del profesor
include 'conexion.php';
$con=conexion();
//inicio de definicion para espacio de eliminar;
$eliminar=$_POST['eliminar'];
$codigo=$_POST['cod_user'];
if($eliminar=="Maestro"){
    $consulta0="SELECT cod_profe FROM tbl_profesor WHERE cod_profe='$codigo'";
    $query0=pg_query($con,$consulta0);
    while($col5=pg_fetch_Array($query0)){
        $cod_maestro=$col5['cod_profe'];
    }
    if($cod_maestro!=$codigo){
        echo "<script type='text/javascript'>
        var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
        w.document.open();
        w.document.write('<center><br><h1>¡Maestro no encontrado!</h1><h2>Ingrese el codigo del maestro correctamente</h2></center>'); 
        w.document.close();
       </script> ";
        
        echo "<script>
        window.location.href = 'administrador.php';
        </script>";
    }else{
    $consulta13="DELETE FROM tbl_profe_grado WHERE cod_profe='$codigo'";
    $query13=pg_query($con,$consulta13);
    $consulta14="DELETE FROM tbl_profe_materia WHERE cod_profe='$codigo'";
    $query14=pg_query($con,$consulta14);
    $consulta15="DELETE FROM tbl_profe_seccion WHERE cod_profe='$codigo'";
    $query15=pg_query($con,$consulta15);
    $consulta16="DELETE FROM tbl_usuario WHERE cod_profe='$codigo'";
    $query16=pg_query($con,$consulta16);
    $consulta17="DELETE FROM tbl_profesor WHERE cod_profe='$codigo'";
    $query17=pg_query($con,$consulta17);
    echo "<script type='text/javascript'>
    var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
    w.document.open();
    w.document.write('<center><br><h1>¡BORRADO EXITOSAMENTE!</h1><h2>Se completo la accion</h2></center>'); 
    w.document.close();
   </script> ";
    
    echo "<script>
    window.location.href = 'administrador.php';
    </script>";
    
    }
}elseif($eliminar=="Alumno"){
   $dato="SELECT nie FROM tbl_estudiantes WHERE nie='$codigo'";
   $query=pg_query($con,$dato);
   while($col3=pg_fetch_Array($query)){
     $nie=$col3['nie'];
   }
if($nie!=$codigo){ 
    echo "<script type='text/javascript'>
   var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
   w.document.open();
   w.document.write('<center><br><h1>¡NIE no encontrado!</h1><h2>Ingrese el NIE del estudiante correctamente</h2></center>'); 
   w.document.close();
  </script> ";
   
   echo "<script>
   window.location.href = 'administrador.php';
   </script>";
}else{
    $consulta18="DELETE FROM tbl_notas WHERE nie='$codigo'";
    $query18=pg_query($con,$consulta18);
    $consulta19="DELETE FROM  tbl_promedio  WHERE nie='$codigo'";
    $query19=pg_query($con,$consulta19);
    $consulta20="DELETE FROM tbl_estu_mate WHERE nie='$codigo'";
    $query20=pg_Query($con,$consulta20);
    $consulta21="DELETE FROM tbl_estudiantes WHERE nie='$codigo'";
    $query21=pg_query($con,$consulta21);
    echo "<script type='text/javascript'>
    var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
    w.document.open();
    w.document.write('<center><br><h1>¡BORRADO EXITOSAMENTE!</h1><h2>Se completo la accion</h2></center>'); 
    w.document.close();
   </script> ";
    
    echo "<script>
    window.location.href = 'administrador.php';
    </script>";
    
}
}elseif($eliminar=="Padre"){
    $search_dui="SELECT dui FROM tbl_padres WHERE dui='$codigo'";
    $query24=pg_query($con,$search_dui);
    while($col4=pg_fetch_Array($query24)){
        $find_dui=$col4['dui'];
    }
    if($find_dui!=$codigo){
        echo "<script type='text/javascript'>
   var w=window.open('200px','200px','height=200, width=400, menubar=n0, toolbar=no');
   w.document.open();
   w.document.write('<center><br><h1>¡DUI no encontrado!</h1><h2>Ingrese el Dui del padre correctamente</h2></center>'); 
   w.document.close();
  </script> ";
   
   echo "<script>
   window.location.href = 'administrador.php';
   </script>";
    }else{
    $consulta22="DELETE FROM tbl_usuario WHERE dui='$codigo'";
    $query22=pg_query($con,$consulta22);
    $consulta23="DELETE FROM tbl_padres WHERE dui='$codigo'";
    $query23=pg_query($con,$consulta);
    echo "<script type='text/javascript'>
    var w=window.open('','','height=200, width=400, menubar=n0, toolbar=no');
    w.document.open();
    w.document.write('<center><br><h1>¡BORRADO EXITOSAMENTE!</h1><h2>Se completo la accion</h2></center>'); 
    w.document.close();
   </script> ";
    sleep(2);
    echo "<script>
    window.location.href = 'administrador.php';
    </script>";
    }
   
}
