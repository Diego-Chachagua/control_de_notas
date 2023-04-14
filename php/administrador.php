<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="description" content="Sitio web sobre control de notas INCAS">
        <meta name="Keywords" content="Control de notas incas,CONTROL DE NOTAS INCAS,Control De Notas Incas,control de notas incas,incas,Incas,INCAS,&iacute;nstituto nacional cornelio azen&oacute;n Sierra, &Iacute;NSTITUTO NACIONAL CORNELIO AZEN&Oacute;N SIERRA,&Iacute;nstituto Nacional Cornelio Azen&oacute;n Sierra">
        <meta name="author" content="Promoci&oacute;n de bachillerato tecnico vocacional en software año 2023">
        <meta name="copyright" content="Sitio web sobre control de notas INCAS,Promoci&oacute;n de bachillerato tecnico vocacional en software año 2023">
        
        <!--Vinculaación de ficheros externos-->
    <title>Consulta de notas INCAS</title>
    <link rel="shourt icon" href="/control_de_notas/images/incas.png">
    <link rel="stylesheet" type="text/css" href="/control_de_notas/css/principal.css" media="screen"/>
    </head>
    <body>
        <h2 class="inst">Escriba los datos del alumno a registrar</h2><br>
        <h3 class="materia2">Elija las materias que llevara el alumno</h3><br>
        <form action="info_admin.php" method="post">
        <div class="materias1">
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="1"> Lenguaje
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="4"> Sociales
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="3"> Ciencia
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="5"> Muci
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="6"> Ingles
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="2"> Matem&aacute;tica
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="7"> Inform&aacute;tica
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="8"> Oplv
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="9"> Seminario
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="10"> Curso de habilitaci&oacute;n para la vida
    </div><br>
    <div class="materias1">
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="11"> Evidencia actitudes favorables para la convivencia
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="12"> Toma desiciones de forma a&uacute;tonoma y responsable
    <input type="checkbox" name="materias[]" id="materias" class="check1" value="13"> Se expresa y participa con respeto
    </div><br>
    <div class="materias1">
    <center><input type="checkbox" name="materias[]" id="materias[]" class="check1" value="14"> Muestra sentido de pertenencia y respeto por nuestra cultura</center>
    </div><br>
    <div class="grid-layout">
        
                <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder="Nombre del estudiante" >
    
        <select name="grado">
            <option disabled selected="">Selecciona un a&ntilde;o</option>
            <option>1</option>
            <option>2</option>
        </select>
       
       
        <select class="seccion" name="seccion">
            <option disabled selected="">Selecciona una secci&oacute;n</option>
            <option>K</option>
            <option>O</option>
            <option>M</option>
            <option>L</option>
            <option>N</option>
            <option>D</option>
            <option>H</option>
            <option>G</option>
            <option>E</option>
            <option>B</option>
        </select>
       
       
        <select name="genero">
            <option disabled selected="">Selecciona un g&eacute;nero</option>
            <option>Masculino</option>
            <option>Femenino</option>
        
        </select>
       
    </div>
    
        <input type="text" id="nombre_alumno" name="apellidos_alumno" placeholder="Apellidos del estudiante" ><br>
    
    
        <input type="text" id="nombre_alumno" name="nombre_padre" placeholder="Nombres del padre" ><br>

        <input type="text" id="nombre_alumno" name="apellidos_padre" placeholder="Apellidos del padre" ><br>
    
    
        <input type="text" id="dui" name="dui" placeholder="Dui del padre" ><br><br>
    
        <input type="text" id="nia" name="nie" placeholder="NIE estudiante" ><br>
    <br>
    <input type="submit" id="guardar"  value="Guardar">
        <input type="submit" id="cancelar"  value="Cancelar"><br><br>
</form>
    <h2 class="inst">Escriba los datos del profesor a registrar</h2><br>
    <h3 class="materia2">Elija las materias que llevara el Profesor</h3><br>
    <form action="info_admin.php" method="post">
        <div class="materias1" >
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="1"> Lenguaje
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="4"> Sociales
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="3"> Ciencia
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="5"> Muci
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="6"> Ingles
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="2"> Matem&aacute;tica
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="7"> Inform&aacute;tica
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="8"> Oplv
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="9"> Seminario
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="10"> Curso de habilitaci&oacute;n para la vida
    </div><br>
    <div class="materias1">
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="11"> Evidencia actitudes favorables para la convivencia
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="12"> Toma desiciones de forma a&uacute;tonoma y responsable
    <input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="13"> Se expresa y participa con respeto
    </div><br>
    <div class="materias1">
    <center><input type="checkbox" name="materias_prof[]" id="materias" class="check1" value="14"> Muestra sentido de pertenencia y respeto por nuestra cultura</center>
    </div><br>
    <div class="grid-layout">
        
                <input type="text" id="nombre_alumno" name="nombre_profesor" placeholder="Nombre del profesor" >
       
       
        <select name="grado_prof">
            <option disabled selected="">Selecciona un a&ntilde;o</option>
            <option>1</option>
            <option>2</option>
            <option>1 y 2</option>
        </select>
       
    
       
        <select name="genero_prof">
            <option disabled selected="" >Selecciona un g&eacute;nero</option>
            <option>Masculino</option>
            <option>Femenino</option>
        
        </select>
       
    </div>
        <input type="text" id="nombre_alumno" name="apellidos_profesor" placeholder="Apellidos del profesor" >
    <br>
    <select id="select1" class="seccion" name="secciones_prof[]" multiple>
            <option disabled selected="">Selecciona una secci&oacute;n</option>
            <option value="1">1<p>-A</p></option>
            <option value="2">2<p>-F</p></option>
            <option value="3">3<p>-E</p></option>
            <option value="4">4<p>-H</p></option>
            <option value="5">5<p>-G</p></option>
            <option value="6">6<p>-D</p></option>
        </select><br><br>
        <input type="submit" id="guardar"  value="Guardar">
        <input type="submit" id="cancelar"  value="Cancelar"><br><br>
</form>
        <h2 class="inst">Escriba lo que desea eliminar</h2>
       
        <div class="grid-layout2">
       
            <form action="administrador.php" method="post">
                <select class="opcion" name="eliminar">
                    <option disabled selected="">Selecciona un opci&oacute;n:</option>
                    <option>Maestro</option>
                    <option>Alumno</option>
                    <option>Padre</option>
                </select>
                <input type="text" id="eliminar" name="cod_user" placeholder="Escriba el Codigo/NIE/DUI que decea borrar" >


        </div><br>
        <input type="submit" id="eliminar_total"  value="Eliminar"><br><br>
</form>

<?php
include 'conexion.php';
$con=conexion();
if(isset($_POST['cod_user']) && isset($_POST['eliminar'])){

//espacio para funcionalidad en espacio de eliminar
$cod_user=$_POST['cod_user'];
$eliminar=$_POST['eliminar'];
//espacio para borrar los registros de un profesor en especifico
if($eliminar=="Maestro"){
    $consulta13="DELETE FROM tbl_profe_materia WHERE cod_profe='$cod_user'";
    $query13=pg_query($con,$consulta13);
    $consulta15="DELETE FROM tbl_profe_seccion WHERE cod_profe='$cod_user'";
    $query15=pg_query($con,$consulta15);
    $consulta16="DELETE FROM tbl_profe_grado WHERE cod_profe='$cod_user'";
    $query16=pg_query($con,$consulta16);
    $consulta17="DELETE FROM tbl_usuario WHERE cod_profe='$cod_user'";
    $query17=pg_query($con,$consulta17);
    $consulta14="DELETE FROM tbl_profesor WHERE cod_profe='$cod_user'";
    $query14=pg_query($con,$consulta14);
}elseif($eliminar=="Alumno"){
    
    //espacio para borrar a un alumno en especifico
    $consulta28="SELECT nie FROM tbl_estudiantes WHERE nie='$cod_user'";
    $query28=pg_query($con,$consulta28);
    $nie_es=0;
    while($col4=pg_fetch_Array($query28)){
        $nie_es=$col4['nie'];
    }
   if($nie_es==""){

   }else{
    if($nie_es != $cod_user){
        echo "<script>alert('Numero de NIE no encontrado')</script>";
    }else{
    $consulta18="DELETE FROM tbl_notas WHERE nie='$cod_user'";
    $query18=pg_query($con,$consulta18);
    $consulta19="DELETE FROM tbl_promedio WHERE nie='$cod_user'";
    $query19=pg_query($con,$consulta19);
    $consulta20="DELETE FROM tbl_estu_mate WHERE nie='$cod_user'";
    $query20=pg_query($con,$consulta20);
    $consulta21="DELETE FROM tbl_estudiantes WHERE nie='$cod_user'";
    $query21=pg_query($con,$consulta21);
    $consulta22="SELECT dui FROM tbl_estudiantes WHERE nie='$cod_user'";//consulta el dui segun nie para posteriormente borrarlo
    $query22=pg_query($con,$consulta22);
    while($col3=pg_fetch_Array($query22)){
        $dui_padre=$col3['dui'];
    }
    if($dui_padre==""){

    }else{
    $consulta23="DELETE FROM tbl_padres WHERE dui='$dui_padre'";
    $query23=pg_query($con,$consulta23);
    }
}
}
   
}elseif($eliminar=="Padre"){
    $consulta24="SELECT nie FROM tbl_estudiante WHERE dui=$cod_user";
    $query24=pg_query($con,$consulta24);
    while($col2=pg_fetch_Array($query24)){
        $nie_estudiante=$col2['nie'];
    }
    $consulta25="DELETE FROM tbl_estudiante WHERE nie='$nie_estudiante'";
    $query25=pg_query($con,$consulta25);
    $consulta26="DELETE FROM tbl_usuario WHERE dui='$cod_user'";
    $query26=pg_query($con,$consulta26);
    $consulta27="DELETE FROM tbl_padre WHERE dui='$cod_user'";
    $query27=pg_query($con,$consulta27);
}

}


?>
<center>
<form action="alumnos.php" method="post">
        <h2 class="inst">Ingrese de que a&ntilde;o y secci&oacute;n desea ver usuarios:</h2><br>
        <input type="text" id="grado2" name="grado2" placeholder="Grado">
        <input type="text" id="seccion2" name="seccion2" placeholder="Seccion">
        <br><br>
        <br><input type="submit" id="usuarios"  value="Ver usuarios">
        </center>
</form>
    </body>