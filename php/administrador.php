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
        <div class="materias1">
    <input type="checkbox" name="materias" id="materias" class="check1"> Lenguaje
    <input type="checkbox" name="materias" id="materias" class="check1"> Sociales
    <input type="checkbox" name="materias" id="materias" class="check1"> Ciencia
    <input type="checkbox" name="materias" id="materias" class="check1"> Muci
    <input type="checkbox" name="materias" id="materias" class="check1"> Ingles
    <input type="checkbox" name="materias" id="materias" class="check1"> Matem&aacute;tica
    <input type="checkbox" name="materias" id="materias" class="check1"> Inform&aacute;tica
    <input type="checkbox" name="materias" id="materias" class="check1"> Oplv
    <input type="checkbox" name="materias" id="materias" class="check1"> Seminario
    <input type="checkbox" name="materias" id="materias" class="check1"> Curso de habilitaci&oacute;n para la vida
    </div><br>
    <div class="materias1">
    <input type="checkbox" name="materias" id="materias" class="check1"> Evidencia actitudes favorables para la convivencia
    <input type="checkbox" name="materias" id="materias" class="check1"> Toma desiciones de forma a&uacute;tonoma y responsable
    <input type="checkbox" name="materias" id="materias" class="check1"> Se expresa y participa con respeto
    </div><br>
    <div class="materias1">
    <center><input type="checkbox" name="materias" id="materias" class="check1"> Muestra sentido de pertenencia y respeto por nuestra cultura</center>
    </div><br>
    <div class="grid-layout">
        <form>
                <input type="text" id="nombre_alumno" name="nombre_alumno" placeholder="Nombre del estudiante" >
        </form>
       <form>
        <select>
            <option disabled selected="">Selecciona un a&ntilde;o</option>
            <option>1</option>
            <option>2</option>
        </select>
       </form>
       <form>
        <select class="seccion">
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
       </form>
       <form>
        <select>
            <option disabled selected="">Selecciona un g&eacute;nero</option>
            <option>Masculino</option>
            <option>Femenino</option>
        
        </select>
       </form>
    </div>
    <form>
        <input type="text" id="nombre_alumno" name="apellidos_alumno" placeholder="Apellidos del estudiante" >
    </form>
    <form>
        <input type="text" id="nombre_alumno" name="nombre_padre" placeholder="Nombres del padre" >
    </form>
    <form>
        <input type="text" id="nombre_alumno" name="apellidos_pardre" placeholder="Apellidos del padre" >
    </form>
    <form>
        <input type="text" id="dui" name="dui" placeholder="Dui del padre" >
    </form>
    <form>
        <input type="text" id="nie" name="nie" placeholder="NIE estudiante">
    </form><br>
    <input type="submit" id="guardar"  value="Guardar">
        <input type="submit" id="cancelar"  value="Cancelar"><br><br>
    <h2 class="inst">Escriba los datos del profesor a registrar</h2><br>
    <h3 class="materia2">Elija las materias que llevara el Profesor</h3><br>
        <div class="materias1">
    <input type="checkbox" name="materias" id="materias" class="check1"> Lenguaje
    <input type="checkbox" name="materias" id="materias" class="check1"> Sociales
    <input type="checkbox" name="materias" id="materias" class="check1"> Ciencia
    <input type="checkbox" name="materias" id="materias" class="check1"> Muci
    <input type="checkbox" name="materias" id="materias" class="check1"> Ingles
    <input type="checkbox" name="materias" id="materias" class="check1"> Matem&aacute;tica
    <input type="checkbox" name="materias" id="materias" class="check1"> Inform&aacute;tica
    <input type="checkbox" name="materias" id="materias" class="check1"> Oplv
    <input type="checkbox" name="materias" id="materias" class="check1"> Seminario
    <input type="checkbox" name="materias" id="materias" class="check1"> Curso de habilitaci&oacute;n para la vida
    </div><br>
    <div class="materias1">
    <input type="checkbox" name="materias" id="materias" class="check1"> Evidencia actitudes favorables para la convivencia
    <input type="checkbox" name="materias" id="materias" class="check1"> Toma desiciones de forma a&uacute;tonoma y responsable
    <input type="checkbox" name="materias" id="materias" class="check1"> Se expresa y participa con respeto
    </div><br>
    <div class="materias1">
    <center><input type="checkbox" name="materias" id="materias" class="check1"> Muestra sentido de pertenencia y respeto por nuestra cultura</center>
    </div><br>
    <div class="grid-layout">
        <form>
                <input type="text" id="nombre_alumno" name="nombre_profesor" placeholder="Nombre del profesor" >
        </form>
       <form>
        <select>
            <option disabled selected="">Selecciona un a&ntilde;o</option>
            <option>1</option>
            <option>2</option>
        </select>
       </form>
       <form>
        <select class="seccion">
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
       </form>
       <form>
        <select>
            <option disabled selected="">Selecciona un g&eacute;nero</option>
            <option>Masculino</option>
            <option>Femenino</option>
        
        </select>
       </form>
    </div>
    <form>
        <input type="text" id="nombre_alumno" name="apellidos_profesor" placeholder="Apellidos del profesor" >
    </form><br>
        <input type="submit" id="guardar"  value="Guardar">
        <input type="submit" id="cancelar"  value="Cancelar"><br><br>
        <h2 class="inst">Escriba lo que desea eliminar</h2>
        <div class="grid-layout2">
            <form>
                <select class="opcion">
                    <option disabled selected="">Selecciona un opci&oacute;n:</option>
                    <option>Maestro</option>
                    <option>Alumno</option>
                </select>
               </form>
            <form>
                <input type="text" id="eliminar" name="Eliminar" placeholder="Escriba lo que desea eliminar" >
            </form>
        </div><br>
        <input type="submit" id="eliminar_total"  value="Eliminar"><br><br>
        <h2 class="inst">Ingrese de que a&ntilde;o y secci&oacute;n</h2><br>
        <div class="grid-layuot5">
        <form>
        <select class="opanio">
            <option disabled selected="">Selecciona un a&ntilde;o</option>
            <option>1</option>
            <option>2</option>
        </select>
       </form>
       <form>
        <select class="seccion">
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
       </form>
       </div><br><br>
        <a href="/control_de_notas/php/alumnos.php"><h1 class="botonU">Click para ver los usuarios asignados</h1></a><br><br>
    </body>