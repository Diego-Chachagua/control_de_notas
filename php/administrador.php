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
        <form action="p1_admid.php" method="post">
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
    <form action="p2_admin.php" method="post">
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
       
            <form action="info_admin.php" method="post">
                <select class="opcion" name="eliminar" id="eleccion">
                    <option disabled selected="">Selecciona un opci&oacute;n:</option>
                    <option value="Maestro" >Maestro</option>
                    <option>Alumno</option>
                    <option>Padre</option>
                </select>
                <input type="text" id="eliminar" name="cod_user" placeholder="Escriba el Codigo/NIE/DUI que decea borrar" >


        </div><br>
        <input type="submit" id="eliminar_total"  value="Eliminar" ><br><br>
</form><br>


<form action="alumnos.php" method="post">
        <h2 class="inst">Ingrese de que a&ntilde;o y secci&oacute;n desea ver usuarios:</h2>
        <input type="text" id="grado2" name="grado2" placeholder="Grado">
        <input type="text" id="seccion2" name="seccion2" placeholder="Seccion: solo letras may&uacute;sculas">
        <input type="submit" id="usuarios"  value="Ver usuarios">

</form><br>

<form action="estudiantes.php" method="post">
        <h2 class="inst">Ingrese de que a&ntilde;o y secci&oacute;n desea ver los estudiantes:</h2>
        <input type="text" id="grado2" name="grado2" placeholder="Grado">
        <input type="text" id="seccion2" name="seccion2" placeholder="Seccion: solo letras may&uacute;sculas">
        <input type="submit" id="usuarios"  value="Ver estudiantes">
</form><br>

<form action="padre.php" method="post">
        <h2 class="inst">Ingrese de que a&ntilde;o y secci&oacute;n desea ver los padres:</h2>
        <input type="text" id="grado2" name="grado2" placeholder="Grado">
        <input type="text" id="seccion2" name="seccion2" placeholder="Seccion: solo letras may&uacute;sculas">
        <input type="submit" id="usuarios"  value="Ver padres">
</form><br>

<form action="profesores.php" method="post">
        <h2 class="inst">Ver profesores:</h2>
        <br><input type="submit" id="usuarios"  value="Ver profesores">
        <br><br>
</form>
<hr>
<form action="boleta_admin.php" method="post">
    <input type="text" class="inputn" name="niee" placeholder="Ingrese el nie de estudiante que quiere ver la boleta" ><br>
    <br><input type="submit" id="nio"  value="Ver boleta">
</form><hr><br>

<a href="/control_de_notas/php/manuales.php"><input id="Imprimir" type="submit" name="Imprimir" value="AYUDA!">
    </body>