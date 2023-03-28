<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATERIAS</title>
    <link rel="stylesheet" type="text/css" href="/control_de_notas/css/materia.css" media="screen"/>
    <link rel="stylesheet" href="/control_de_notas/js/materia.js" media="screen"/>
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
    <button class="materia"  id="6" onclick="mate()">
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
                    //Guarda la información de la consulta
                    $row2 = pg_fetch_assoc($consulta2);
                    $codmateria = $row2['cod_materia'];
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

if(empty($usuario)){//Si entran a la pagina sin primero iniciar sesión lo envia a la pagina para iniciar sesión de profesores
    header("location: ./formulario_profesor.php");
}

?>

<script>
function ciencia(){
        var codmateria = <?php echo $codmateria; ?>;
        var materia = 3;
        var btnEnviar = document.getElementById("1");

        // Verifica si los datos son distintos
        if (codmateria !== materia) {
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }

        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        window.location.href = "./eleccion.php";
        return true;
    }

    function muci(){
        var codmateria = <?php echo $codmateria; ?>;
        var materia = 5;
        var btnEnviar = document.getElementById("2");

        // Verifica si los datos son distintos
        if (codmateria !== materia) {
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }

        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        window.location.href = "./eleccion.php";
        return true;
    }

    function sociales(){
        var codmateria = <?php echo $codmateria; ?>;
        var materia = 4;
        var btnEnviar = document.getElementById("3");

        // Verifica si los datos son distintos
        if (codmateria !== materia) {
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }

        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        window.location.href = "./eleccion.php";
        return true;
    }

    function ingles(){
        var codmateria = <?php echo $codmateria; ?>;
        var materia = 6;
        var btnEnviar = document.getElementById("4");

        // Verifica si los datos son distintos
        if (codmateria !== materia) {
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }

        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        window.location.href = "./eleccion.php";
        return true;
    }

    function oplv(){
        var codmateria = <?php echo $codmateria; ?>;
        var materia = 8;
        var btnEnviar = document.getElementById("5");

        // Verifica si los datos son distintos
        if (codmateria !== materia) {
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }

        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        window.location.href = "./eleccion.php";
        return true;
    }

    function mate(){
        var codmateria = <?php echo $codmateria; ?>;
        var materia = 2;
        var btnEnviar = document.getElementById("6");

        // Verifica si los datos son distintos
        if (codmateria !== materia) {
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }

        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        window.location.href = "./eleccion.php";
        return true;
    }

    function lenguaje(){
        var codmateria = <?php echo $codmateria; ?>;
        var materia = 1;
        var btnEnviar = document.getElementById("7");

        // Verifica si los datos son distintos
        if (codmateria !== materia) {
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }

        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        window.location.href = "./eleccion.php";
        return true;
    }

    function info(){
        var codmateria = <?php echo $codmateria; ?>;
        var materia = 7;
        var btnEnviar = document.getElementById("8");

        // Verifica si los datos son distintos
        if (codmateria !== materia) {
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }

        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        window.location.href = "./eleccion.php";
        return true;
    }

    function semi(){
        var codmateria = <?php echo $codmateria; ?>;
        var materia = 9;
        var btnEnviar = document.getElementById("9");

        // Verifica si los datos son distintos
        if (codmateria !== materia) {
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }

        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        window.location.href = "./eleccion.php";
        return true;
    }

    function hpp(){
        var codmateria = <?php echo $codmateria; ?>;
        var materia = 10;
        var btnEnviar = document.getElementById("10");

        // Verifica si los datos son distintos
        if (codmateria !== materia) {
            // Desactiva el botón
            btnEnviar.disabled = true;
            return false;
        }

        // Si los datos son iguales, redirige al usuario a la página eleccion.php
        window.location.href = "./eleccion.php";
        return true;
    }

    
</script>