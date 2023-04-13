<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATERIAS</title>
    <link rel="stylesheet" type="text/css" href="/control_de_notas/css/materia.css" media="screen"/>
</head>
<body>
    <div></div>
    <h1  class="eleccion">SELECCIONE UNA MATERIA<br>¿QUE MATERIA DESEA ESCOGER?</h1>
    <button class="materia" id="1" onclick="ciencia()">   
            <div class="foto">
                <img class="ciencias" src="../images/quimica1.png" alt="">
            </div>
            <div class="pie">
                <P class="letras">CIENCIAS</P>
            </div>
    </button>
    <button class="materia" id="2" onclick="muci()">   
            <div class="foto">
                <img class="ciencias" src="../images/muci.png" alt="">
            </div>
            <div class="pie">
                <P class="letras">MUCI</P>
            </div>
    </button>
    <button class="materia" id="3" onclick="sociales()">
            <div class="foto">
                <img src="../images/sociales1.png" alt="">
            </div>
            <div class="pie">
                <p class="letras">SOCIALES</p>
            </div>
    </button>
    <button class="materia" id="4" onclick="ingles()">
            <div class="foto">
                <img src="../images/ingles1.png" alt="">
            </div>
            <div class="pie">
                <p class="letras">INGLES</p>
            </div>
    </button>
    <button class="materia" id="5" onclick="oplv()">
            <div class="foto">
                <img src="../images/oplv1.png" alt="">
            </div>
            <div class="pie">
                <p class="letras">OPLV</p>
            </div>
    </button>
    <button class="materia"  id="6" onclick="matematica()">
            <div class="foto">
                <img src="../images/mate.png" alt="">
            </div>
            <div class="pie">
                <P class="letras">MATEMATICA</P>
            </div>
    </button>
    <button class="materia" id="7" onclick="lenguaje()">
            <div class="foto">
            <img src="../images/lenguaje1.png" id="lenguaje">
            </div>
            <div class="pie">
            <P class="letras">LENGUAJE</P>
            </div>
    </button>
    <button class="materia" id="8" onclick="info()">
            <div class="foto">
                    <img src="../images/info3.png" alt="">
            </div>
            <div class="pie">
                <p class="letras">INFORMATICA</p>
            </div>
    </button>    
    <button class="materia" id="9" onclick="semi()">
            <div class="foto">
                <img src="../images/seminario1.png" alt="">
            </div>
            <div class="pie">
                <P class="letras">SEMINARIO</P>
            </div>
    </button>
    <button class="materia"  id="10" onclick="hpp()">
            <div class="foto">
            <img src="../images/hpp1.png">
            </div>
            <div class="pie">
                <P class="letras">HPP</P>
            </div>
    </button>
</body>
</html>

<?php
/*Conexión entre php y la base de datos "notas" de postgresql */
$conexion=pg_connect("host=localhost dbname=notas user=notasadmin password=incasnotas");

//Evita el error de datos vacios de la variable $usuario
if (isset($_POST['usuario'])) {
    //Recibe el dato de usuario de profesor del inicio de sesion del profesor
    $usuario = $_POST['usuario'];

    //Extraer el valor del codigo profesor con el usuario 
    $consulta = pg_query($conexion,"SELECT cod_profe FROM tbl_usuario WHERE usuario_profe='$usuario'");

    if ($consulta) { // Verifica si la consulta se realizó correctamente
        // Verifica si la consulta devolvió algún resultado
        if (pg_num_rows($consulta) > 0) {
            //Guarda la información de la consulta
            $row = pg_fetch_assoc($consulta);
            $codprofe = $row['cod_profe'];

            //Extraer el valor del codigo materia con el codigo profesor 
            $consulta2 = pg_query($conexion, "SELECT cod_materia FROM tbl_profe_materia WHERE cod_profe='$codprofe'");

            if ($consulta2) { // Verifica si la consulta se realizó correctamente
               // Verifica si la consulta devolvió algún resultado
               if (pg_num_rows($consulta2) > 0) {
                    //Guarda la información de la consulta en un array
                    $codmateria_array = array();
                    while ($row2 = pg_fetch_assoc($consulta2)) {
                        $codmateria_array[] = $row2['cod_materia'];
                    }
                    // Asigna los valores del array a variables diferentes
                    $num_codmaterias = count($codmateria_array); // Cuenta el número de códigos de materia encontrados
                    for ($i = 0; $i < $num_codmaterias; $i++) {
                        // Asigna el valor del elemento correspondiente a la variable creada
                        if ($i == 0) {
                            $codmateria1 = $codmateria_array[$i];
                        } elseif ($i == 1) {
                            $codmateria2 = $codmateria_array[$i];
                        } elseif ($i == 2) {
                            $codmateria3 = $codmateria_array[$i];
                        } elseif ($i == 3) {
                            $codmateria4 = $codmateria_array[$i];
                        }
                    }
                    if(empty($codmateria1)){
                        $codmateria1 = 0;
                    }
                    if(empty($codmateria2)){
                        $codmateria2 = 0;
                    }
                    if(empty($codmateria3)){
                        $codmateria3 = 0;
                    }
                    if(empty($codmateria4)){
                        $codmateria4 = 0;
                    }

                } else {
                    // Si la consulta no devuelve ningún resultado, establece la variable a un valor nulo
                    $codmateria = null;
                }
            } else {
                // Si la consulta no se realizó correctamente, establece la variable a un valor nulo
                $codmateria = null;
            }
        } else {
            // Si la consulta no devuelve ningún resultado, establece la variable a un valor nulo
            $codmateria = null;
        }
    } else {
        // Si la consulta no se realizó correctamente, establece la variable a un valor nulo
        $codmateria = null;
    }
} else {//Si la variable no tiene ningun valor lo iguala a valor nulo
    $usuario = null;
}

if(empty($usuario)){//Si entran a la pagina sin primero iniciar sesión lo envia a la pagina para iniciar sesión de profesor
    header("location: ./formulario_profesor.php");
}
?>

<script type="text/javascript">

    var materia1 = <?php echo $codmateria1; ?>;
    var materia2 = <?php echo $codmateria2; ?>;
    var materia3 = <?php echo $codmateria3; ?>;
    var materia4 = <?php echo $codmateria4; ?>;
    function ciencia(){
        // Verifica si los datos son distintos
        if (materia1 == 3) {
           condicion = 1;
        }

        if (materia2 == 3) {
           condicion = 1;
        }

        if (materia3 == 3) {
           condicion = 1;
        }

        if (materia4 == 3) {
           condicion = 1;
        }


        if (condicion != 1){
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }
        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        var dato = "CIENCIAS";
        window.location.href = "./eleccion.php?dato=" + dato;
        return true;
    }

    function muci(){
        // Verifica si los datos son distintos
        if (materia1 == 5) {
           condicion = 1;
        }

        if (materia2 == 5) {
           condicion = 1;
        }

        if (materia3 == 5) {
           condicion = 1;
        }

        if (materia4 == 5) {
           condicion = 1;
        }

        if (condicion != 1){
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }
        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        var dato = "MUCI";
        window.location.href = "./eleccion.php?dato=" + dato;
        return true;
        
    }

    function sociales(){
        // Verifica si los datos son distintos
        if (materia1 == 4) {
           condicion = 1;
        }

        if (materia2 == 4) {
           condicion = 1;
        }

        if (materia3 == 4) {
           condicion = 1;
        }

        if (materia4 == 4) {
           condicion = 1;
        }

        if (condicion != 1){
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }
        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        var dato = "SOCIALES";
        window.location.href = "./eleccion.php?dato=" + dato;
        return true;
        
    }

    function ingles(){
        // Verifica si los datos son distintos
        if (materia1 == 6) {
           condicion = 1;
        }

        if (materia2 == 6) {
           condicion = 1;
        }

        if (materia3 == 6) {
           condicion = 1;
        }

        if (materia4 == 6) {
           condicion = 1;
        }

        if (condicion != 1){
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }
        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        var dato = "INGLES";
        window.location.href = "./eleccion.php?dato=" + dato;
        return true;
    }

    function oplv(){
        // Verifica si los datos son distintos
        if (materia1 == 8) {
           condicion = 1;
        }

        if (materia2 == 8) {
           condicion = 1;
        }

        if (materia3 == 8) {
           condicion = 1;
        }

        if (materia4 == 8) {
           condicion = 1;
        }

        if (condicion != 1){
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }
        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        var dato = "OPLV";
        window.location.href = "./eleccion.php?dato=" + dato;
        return true;
        
    }


    function lenguaje(){
        // Verifica si los datos son distintos
        if (materia1 == 1) {
           condicion = 1;
        }

        if (materia2 == 1) {
           condicion = 1;
        }

        if (materia3 == 1) {
           condicion = 1;
        }

        if (materia4 == 1) {
           condicion = 1;
        }

        if (condicion != 1){
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }
        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        var dato = "LENGUAJE";
        window.location.href = "./eleccion.php?dato=" + dato;
        return true;
        
    }

    function info(){
        // Verifica si los datos son distintos
        if (materia1 == 7) {
           condicion = 1;
        }

        if (materia2 == 7) {
           condicion = 1;
        }

        if (materia3 == 7) {
           condicion = 1;
        }

        if (materia4 == 7) {
           condicion = 1;
        }

        if (condicion != 1){
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }
        var dato = "INFORMATICA";
        window.location.href = "./eleccion.php?dato=" + dato;
        return true;
        
    }

    function semi(){
        // Verifica si los datos son distintos
        if (materia1 == 9) {
           condicion = 1;

        }

        if (materia2 == 9) {
           condicion = 1;
        }

        if (materia3 == 9) {
           condicion = 1;
        }

        if (materia4 == 9) {
           condicion = 1;
        }

        if (condicion != 1){
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }
        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        var dato = "SEMINARIO";
        window.location.href = "./eleccion.php?dato=" + dato;
        return true;
        
    }

    function hpp(){
        // Verifica si los datos son distintos
        if (materia1 == 10) {
           condicion = 1;
        }

        if (materia2 == 10) {
           condicion = 1;
        }

        if (materia3 == 10) {
           condicion = 1;
        }

        if (materia4 == 10) {
           condicion = 1;
        }

        if (condicion != 1){
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }
        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        var dato = "HPP";
        window.location.href = "./eleccion.php?dato=" + dato;
        return true;
    }


    function matematica(){

        // Verifica si los datos son distintos
        if (materia1 == 2){
            condicion = 1;
        }
        
        if (materia2 == 2){
            condicion = 1;
        }
        
        if (materia3 == 2){
            condicion = 1;
        }
        
        if (materia4 == 2){
            condicion = 1;
        }
        
        if (condicion != 1){
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }
        var dato = "MATEMATICA";
        window.location.href = "./eleccion.php?dato=" + dato;
        return true;
    }

    
</script>
