<?php
//manejo de sesiones , datos extraidos del documento sesion_C2.php
session_start();
$grado= $_SESSION['grado'];//guarda en numero el numero de año 
$seccion=$_SESSION['nombre_seccion'];//guarda el nombre de la seccion
$cod_seccion=$_SESSION['cod_seccion'];//guarda el codigo de seccion
// Leer dato de la cookie y Resive el nombre de la materia
if(isset($_COOKIE['dato'])) {
    $nombre_materia = $_COOKIE['dato'];
  }else{
      $nombre_materia = null;
  }
  
  //Evaluea y asigna el código de la materia
  if($nombre_materia == "CIENCIAS"){
      $cod_materia = 3;
  }
  
  if($nombre_materia == "SOCIALES"){
      $cod_materia = 4;
  }
  
  if($nombre_materia == "MATEMATICA"){
      $cod_materia = 2;
  }
  
  if($nombre_materia == "LENGUAJE"){
      $cod_materia = 1;
  }
  
  if($nombre_materia == "OPLV"){
      $cod_materia = 8;
  }
  
  if($nombre_materia == "MUCI"){
      $cod_materia = 5;
  }
  
  if($nombre_materia == "INFORMATICA"){
      $cod_materia = 7;
  }
  
  if($nombre_materia == "HPP"){
      $cod_materia = 10;
  }
  
  if($nombre_materia == "SEMINARIO"){
      $cod_materia = 9;
  }
  
  if($nombre_materia == "INGLES"){
      $cod_materia = 6;
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/tabla_1P.css">
    <title>Cuadro de Notas</title>
</head>
<body>
<div id="Container">
   
    <center><h1>  GRADO :"<?php echo $grado;//muestra en pantalla el grado  ?>"  SECCIÓN: "<?php echo $seccion;//muestra en pantalla la seccion ?>" MATERIA "<?php echo $nombre_materia;?>" </h1><center>
 <!--div para el manejo de botones en cuadro-->
<div class="buttons">
  <a href="cuadro1.php"><input class="save " type="button" value="Actualizar" ></a>
  <input class="save " type="submit" value="Imprimir" name="submit"><br>
  <a href="eleccion.php"> <input class="save " type="submit" value="Regresar" name="submit"></a><br>
 
</div>
<!--div de la caja principal-->
    <div id="table_principal">
    <table class="table_one" >
        <tr class="celda_encabezado">
            <td rowspan="2" ><b>N°</b></td>
            <td rowspan="2" class="n"><b>NIE</b></td>
            <td rowspan="2" class="col1"><b>Nombre del estudiante</b></td>
            <td class="periodo"><b>Periodo 1</b></td>
            <td class="periodo"><b>Periodo 2</b></td>
            <td class="periodo"><b>Periodo 3</b></td>
            <td class="periodo"><b>Periodo 4</b></td>
            <td rowspan="2" class="col2" ><b>A</b></td>
            <td rowspan="2" class="col2" ><b>PF</b></td>
            <td rowspan="2" class="col2"><b>R,E1</b></td>
            <td rowspan="2" class="col2"><b>R,E2</b></td>
            <td rowspan="2" class="col2"><b>P,T</b></td>
            <td rowspan="2" class="col3"><b>Resultado</b></td>    
            <td rowspan="2" class="col2"><b>R,P</b></td>
            
        </tr>
        <tr class="second-col">
            <td>
                <table class="table-second" >
                <td><b>A1</b></td>
                <td><b>A2</b></td>
                <td><b>PF</b></td>
                <td><b>PM</b></td>
                </table> 
            </td>

            <td>
                <table class="table-second" >
                <td><b>A1</b></td>
                <td><b>A2</b></td>
                <td><b>PF</b></td>
                <td><b>PM</b></td>
                </table> 
            </td>

            <td>
                <table class="table-second" >
                <td><b>A1</b></td>
                <td><b>A2</b></td>
                <td><b>PF</b></td>
                <td><b>PM</b></td>
                </table> 
            </td>

            <td>
                <table class="table-second" >
                <td><b>A1</b></td>
                <td><b>A2</b></td>
                <td><b>PF</b></td>
                <td><b>PM</b></td>
                </table> 
            </td>

      <?php
     //conexion a la bd
     include 'conexion.php';
     $con= conexion();
     //extraer datos desde la base para mostrar en pantalla
           
     $consulta="SELECT cod_nota, nombre_estudiante, act1_p1, act2_p1, po_p1, act1_p2, act2_p2, po_p2, act1_p3, act2_p3, po_p3, act1_p4, act2_p4, po_p4, re1, avanzo, re2 FROM tbl_notas INNER JOIN tbl_estudiantes ON tbl_notas.nie=tbl_estudiantes.nie WHERE  cod_grado='$grado' AND cod_seccion='$cod_seccion'  AND cod_materia='$cod_materia'  ORDER BY cod_nota ASC";
      $query=pg_query($con,$consulta);
     
    
   

      $c=0;//contador definido en 0
       
       while($col=pg_fetch_array($query)){//while para recorrer el array de datos y mostrarlos en pantalla
        $cod=$col['cod_nota'];//guardar valor en variable
        $consulta1="SELECT nie FROM tbl_notas WHERE cod_nota='$cod' ";//extraer el nie
        $query1=pg_query($con,$consulta1);
        while($col1=pg_fetch_array($query1)){
      
      $c=$c+1;   //contador inicializado como autoincremental 
            //inicio de definicion de columna     
        echo "<tr class='three-col'>";
        //inicio de  definicion de celdas para mostrar datos en pantalla
         echo "<td>".$c."</td>";
         echo "<td>".$col1['nie']."</td>";
        echo "<td>".$col['nombre_estudiante']."</td>";
             
          //periodo 1
           echo " <td>";
               echo " <table class='table-second'>";
              
               echo " <td>".$col['act1_p1']."</td>"; 
                echo "<td>".$col['act2_p1']."</td>";
                echo "<td>".$col['po_p1']."</td>";
                $promedio_p1=round(($col['act1_p1']+$col['act2_p1']+$col['po_p1'])/3);//calculo de promedio de primer periodo
               echo " <td>$promedio_p1</td>";
                echo "</table>";
           echo " </td>";

           //periodo 2
           echo " <td>";
               echo " <table class='table-second'>";
               echo " <td>".$col['act1_p2']."</td>"; 
                echo "<td>".$col['act2_p2']."</td>";
                echo "<td>".$col['po_p2']."</td>";
                $promedio_p2=round(($col['act1_p2']+$col['act2_p2']+$col['po_p2'])/3);//calculo de promedio de segundo periodo
               echo " <td>$promedio_p2</td>";
                echo "</table>";
           echo " </td>";

           //periodo 3
           echo " <td>";
               echo " <table class='table-second'>";
              
               echo " <td>".$col['act1_p3']."</td>"; 
                echo "<td>".$col['act2_p3']."</td>";
                echo "<td>".$col['po_p3']."</td>";
                $promedio_p3=round(($col['act1_p3']+$col['act2_p3']+$col['po_p3'])/3);//calculo de promedio de tercer periodo
               echo " <td>$promedio_p3</td>";
                echo "</table>";
           echo " </td>";

           //periodo 4
           echo " <td>";
               echo " <table class='table-second'>";
              
               echo " <td>".$col['act1_p4']."</td>"; 
                echo "<td>".$col['act2_p4']."</td>";
                echo "<td>".$col['po_p4']."</td>";
                $promedio_p4=round(($col['act1_p4']+$col['act2_p4']+$col['po_p4'])/3);//calculo de prpomedio de cuarto periodo
               echo " <td>$promedio_p4</td>";
                echo "</table>";
           echo " </td>";
           echo "<td></td>";//espacio de celda para ingreso de asistencia , falta definir un input text para su ingreso de datos o esperando a ser descartadp
            //ultimas filas
            $promedio_inicial=round(($promedio_p1+$promedio_p2+$promedio_p3+$promedio_p4)/4);//calculo de promedio institucional
            echo "<td>$promedio_inicial</td>";
            echo "<td>".$col['re1']."</td>";
            
            $promedio_total=0; 
             if($promedio_inicial<6){
                if($col['re1']!=""){
                    $promedio_r1=round(($promedio_inicial+$col['re1'])/2);
                    if($promedio_r1>=6){
                        $promedio_total=$promedio_r1;
                    }else{
                        if($col['re2']!=""){
                        $promedio_r2=round(($promedio_r1+$col['re2'])/2);
                        $promedio_total=$promedio_r2;
                        }else{
                            $promedio_total=$promedio_inicial;
                        }
                    }
                }else{
                    $promedio_total=$promedio_inicial;
                }
            }elseif($promedio_inicial>=6){
                $promedio_total=$promedio_inicial;
            }
       
            echo "<td>".$col['re2']."</td>";
            
            echo "<td>".$promedio_total."</td>";
            if($promedio_total>=6){
                echo "<td class='aprobado'>APROBADO</td>";
            }else{
                echo "<td class='reprobado'>REPROBADO</td>";
            }
            
            
          
           
            echo "<td> </td>";//espacio de celda para mostrar si un alumno es repitente
            //ingreso de nuevo estudiante en la BD de tbl_promedio
            $nie=$col1['nie'];
  
            //ingreso de promedios a BD 
            //$consulta3="UPDATE tbl_promedio SET promedio_p1='$promedio_p1', promedio_p2='$promedio_p2', promedio_p3='$promedio_p3', promedio_p4='$promedio_p4', promedio_f='$promedio_institucional', promedio_r='0', promedio_t='$promedio_final' WHERE nie='$nie'";
           // $query3=pg_query($con,$consulta3);
           
            
        echo "</tr>";
       }

    }
   
    ?> 
    </table>
</div>
<br>
<br>
<br>
<br><br>
<!--inicio de definicion de formulario para el ingreso de notas-->
<div class="box_big">
  <div class="box_info">
   
        <form action="sendinfo_C1.php" method="post">
        <center><h2>Ingreso de notas por periodo</h2></center>
           <center> <label>NIE: </label>
            <input type="text"  name="nie" class="nie" require><br>
            </center>
            <label>Actividad 1:<label>
                <input type="text" name="act1" class="act" id="act1">

                <label>Actividad 2:<label>
                <input type="text" name="act2"  class="act">

                <label>Prueba Objetiva:<label>
                <input type="text" name="PO"  class="act">
                <label>Seleccionar Periodo:<label>
                <select name="seleccion" require>
                <option></option>
                    <option>Periodo 1</option>
                    <option>Periodo 2</option>
                    <option>Periodo 3</option>
                    <option>Periodo 4</option>
                </select>
                
                <center>
                   
                <input type="submit" value="Guardar" class="send"  >
                <input type="reset"  value="Reiniciar" class="send">
              
    </center> 
   
        </div> 
    <div class="box_info2">
        
        <center><h2>Ingreso Recuperacion Extaordinaria</h2></center>
       <label>Recuperacion Extaordinaria 1:</label>
       <input type="text" name="R_E1"  class="act">
       <br>
       
       <label>Recuperacion Extaordinaria 2:</label>
       <input type="text" name="R_E2"  class="act">
       <center>
                <input type="submit" value="Guardar" class="send">
                <input type="reset"  value="Reiniciar" class="send">
    </center> 
    </div>

    </form>
    <!--fin de definicion de formulario-->
    
    
    
</div>


</div>
</body>
</html>