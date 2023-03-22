<?php
include 'info_C2.php';
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
    <center><h1>Cuadro "K"  GRADO "2°"</h1><center>
 <!--div para el manejo de botones en cuadro-->
<div class="buttons">
  <input class="save " type="button" value="Actualizar" >
  <input class="save " type="submit" value="Imprimir" name="submit"><br>
 
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
            <td rowspan="2" class="col2" ><b>PI</b></td>
            <td rowspan="2" class="col2"><b>R,E1</b></td>
            <td rowspan="2" class="col2"><b>Avanzo</b></td>
            <td rowspan="2" class="col2"><b>R,E2</b></td>
            <td rowspan="2" class="col2"><b>P,T</b></td>
            <td rowspan="2" class="col3"><b>Resultado</b></td>    
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
      $c=0;
       //variable c definida en 0
        for($i=1;$i<=30;$i++){
           
       //for para repetir las columnas hasta 30
      $c=$c+1;
      //contador

      
            
            //inicio de definicion de columna     
        echo "<tr class='three-col'>";
         echo "<td>".$c."</td>";
         echo "<td>1234567</td>";
        echo "<td>NAME AND LAST NAME</td>";
        
            
          //periodo 1
           echo " <td>";
               echo " <table class='table-second'>";
               //asignacion de identificador a un name 
               echo " <td></td>"; 
                echo "<td></td>";
                echo "<td></td>";
               echo " <td>0</td>";
                echo "</table>";
           echo " </td>";

           //periodo 2
           echo " <td>";
               echo " <table class='table-second'>";
               //asignacion de identificador a un name 
               echo " <td></td>"; 
                echo "<td></td>";
                echo "<td></td>";
               echo " <td>0</td>";
                echo "</table>";
           echo " </td>";

           //periodo 3
           echo " <td>";
               echo " <table class='table-second'>";
               //asignacion de identificador a un name 
               echo " <td></td>"; 
                echo "<td></td>";
                echo "<td></td>";
               echo " <td>0</td>";
                echo "</table>";
           echo " </td>";

           //periodo 4
           echo " <td>";
               echo " <table class='table-second'>";
               //asignacion de identificador a un name 
               echo " <td></td>"; 
                echo "<td></td>";
                echo "<td></td>";
               echo " <td>0</td>";
                echo "</table>";
           echo " </td>";
        
            //ultimas filas
            echo "<td>0</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>0</td>";
            echo "<td>REPROBADO</td>";
            
            
        echo "</tr>";
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
   
        <form action="info_C2.php" method="post">
        <center><h2>Ingreso de notas por periodo</h2></center>
           <center> <label>NIE: </label>
            <input type="text"  name="nie" class="nie"><br>
            </center>
            <label>Actividad 1:<label>
                <input type="text" name="act1" class="act">

                <label>Actividad 2:<label>
                <input type="text" name="act2"  class="act">

                <label>Prueba Objetiva:<label>
                <input type="text" name="PO"  class="act">
                <label>Seleccionar Periodo:<label>
                <select name="seleccion">
                <option></option>
                    <option>Periodo 1</option>
                    <option>Periodo 2</option>
                    <option>Periodo 3</option>
                    <option>Periodo 4</option>
                </select>
                
                <center>
                <input type="submit" value="Guardar" class="send">
                <input type="reset"  value="Reiniciar" class="send">
    </center> 
   
        </div> 
    <div class="box_info2">
        
        <center><h2>Ingreso Recuperacion Extaordinaria</h2></center>
       <label>Recuperacion Extaordinaria 1:</label>
       <input type="text" name="R_E1"  class="act">
       <br>
       <label >Prueba Avanzo:</label>
       <input type="text" name="avanzo"  class="act" >
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