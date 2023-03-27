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
    <button class="materia" disabled={true} id="3">   
        <a href="/control_de_notas/php/eleccion.php" >
            <div class="foto">
                <img class="ciencias" src="../images/quimica1.png" alt="">
            </div>
            <div class="pie">
                <P class="letras">CIENCIAS</P>
            </div>
        </a>
    </button>
    <button class="materia" disabled={true} id="5">   
        <a href="/control_de_notas/php/eleccion.php" >
            <div class="foto">
                <img class="ciencias" src="../images/muci.png" alt="">
            </div>
            <div class="pie">
                <P class="letras">MUCI</P>
            </div>
        </a>
    </button>
    <button class="materia" disabled={true} id="4">
        <a href="/control_de_notas/php/eleccion.php" >
            <div class="foto">
                <img src="../images/sociales1.png" alt="">
            </div>
            <div class="pie">
                <p class="letras">SOCIALES</p>
            </div>
        </a>
    </button>
    <button class="materia" disabled={true} id="6">
        <a href="/control_de_notas/php/eleccion.php" >
            <div class="foto">
                <img src="../images/ingles1.png" alt="">
            </div>
            <div class="pie">
                <p class="letras">INGLES</p>
            </div>
        </a>
    </button>
    <button class="materia" disabled={true} id="8" >
        <a href="/control_de_notas/php/eleccion.php" >
            <div class="foto">
                <img src="../images/oplv1.png" alt="">
            </div>
            <div class="pie">
                <p class="letras">OPLV</p>
            </div>
        </a>
    </button>
    <button class="materia" disabled={true} id="2">
        <a href="/control_de_notas/php/eleccion.php" >
            <div class="foto">
                <img src="../images/mate.png" alt="">
            </div>
            <div class="pie">
                <P class="letras">MATEMATICA</P>
            </div>
        </a>    
    </button>
    <button class="materia" id="lenguaje"  onclick="boton1()">
        <a href="/control_de_notas/php/eleccion.php"  id="1">
            <div class="foto">
                <img src="../images/lenguaje1.png" alt="">
            </div>
            <div class="pie">
            <P class="letras">LENGUAJE</P>
            </div>
        </a>
    </button>
    <button class="materia" disabled={true} id="7">
        <a href="/control_de_notas/php/eleccion.php" >
            <div class="foto">
                    <img src="../images/info3.png" alt="">
            </div>
            <div class="pie">
                <p class="letras">INFORMATICA</p>
            </div>
        </a>    
    </button>    
    <button class="materia" disabled={true} id="9">
        <a href="/control_de_notas/php/eleccion.php" >
            <div class="foto">
                <img src="../images/seminario1.png" alt="">
            </div>
            <div class="pie">
                <P class="letras">SEMINARIO</P>
            </div>
        </a>
    </button>
    <button class="materia"  id="hpp"  onclick="boton()">
        <a href="/control_de_notas/php/eleccion.php"  id="10">
            <div class="foto">
                <img src="../images/hpp1.png">
            </div>
            <div class="pie">
                <P class="letras">HPP</P>
            </div>
        </a>
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

    //Verifica los datos asociados en la conulta anterior
    $row = pg_fetch_assoc($consulta);
    
    //Guarda la información de la conulta
    $codprofe = $row['cod_profe'];
    
    //Extraer el valor del codigo profesor con el codigo profesor 
    $consulta2 = pg_query($conexion, "SELECT cod_materia FROM tbl_profe_materia WHERE cod_profe='$codprofe'");
     
    //Verifica los datos asociados en la conulta anterior
    $row2 = pg_fetch_assoc($consulta2);

    //Guarda la información de la conulta
    $codmateria = $row2['cod_materia'];
  } else {//Si la variable no tiene ningun valor lo iguala a valor nulo
    $usuario = null;
  }

?>

<script>


    function boton(){
        var materia10 = 10;
        var enlace = documentetElementById("10");
        var codmateria = <?php echo $codmateria; ?>;

        if (codmateria == materia10){
            enlace.disabled = false;
        }else{
            enlace.disabled = true;
            enlace.style.width = '0';
            enlace.style.height = '0';
        }
    }


    function boton1(){
        var enlace1 = document.getElementById("1");
        var materia1 = 1;
        var codmateria = <?php echo $codmateria; ?>;

        if (codmateria == materia1){
            enlace1.disabled = false;
        }else{
            enlace1.disabled = true;
            enlace1.style.width = '0';
            enlace1.style.height = '0';
            
        }
    }

    // if(codmateria === materia1){
    //     alert("Los valores son iguales");
    // }else{
    //     alert("Los valores son diferentes");
    // }
</script>