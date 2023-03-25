<?php
session_start();
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
    <center><h1>  GRADO :"<?php echo $_SESSION['grado']; ?>" </h1><center>
 <!--div para el manejo de botones en cuadro-->
<div class="buttons">
  <a href="cuadro2.php"><input class="save " type="button" value="Actualizar" ></a>
  <input class="save " type="submit" value="Imprimir" name="submit"><br>
 
</div>
<!--div de la caja principal-->
    <div id="table_principal">
    <table class="table_one" >
        <tr class="celda_encabezado">
            <td rowspan="2" ><b>N°</b></td>
            <td rowspan="2" class="n"><b>ID</b></td>
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
      include 'conexion.php';
      $con= conexion();
      //extraer datos desde la base para mostrar en pantalla
      $consulta="SELECT cod_nota, nombre_estudiante, act1_p1, act2_p1, po_p1, act1_p2, act2_p2, po_p2, act1_p3, act2_p3, po_p3, act1_p4, act2_p4, po_p4, re1, avanzo, re2 FROM tbl_notas INNER JOIN tbl_estudiantes ON tbl_notas.nie=tbl_estudiantes.nie WHERE cod_grado='$anio' AND cod_seccion='$cod_seccion'  AND cod_materia='3' ORDER BY cod_nota ASC";
      $query=pg_query($con,$consulta);

      $c=0;
       //variable c definida en 0
       while($col=pg_fetch_array($query)){
      
      $c=$c+1;    
            //inicio de definicion de columna     
        echo "<tr class='three-col'>";
         echo "<td>".$c."</td>";
         echo "<td>".$col['cod_nota']."</td>";
        echo "<td>".$col['nombre_estudiante']."</td>";
        
            
          //periodo 1
           echo " <td>";
               echo " <table class='table-second'>";
              
               echo " <td>".$col['act1_p1']."</td>"; 
                echo "<td>".$col['act2_p1']."</td>";
                echo "<td>".$col['po_p1']."</td>";
                $promedio_p1=round(($col['act1_p1']+$col['act2_p1']+$col['po_p1'])/3);
               echo " <td>$promedio_p1</td>";
                echo "</table>";
           echo " </td>";

           //periodo 2
           echo " <td>";
               echo " <table class='table-second'>";
               
               echo " <td>".$col['act1_p2']."</td>"; 
                echo "<td>".$col['act2_p2']."</td>";
                echo "<td>".$col['po_p2']."</td>";
                $promedio_p2=round(($col['act1_p2']+$col['act2_p2']+$col['po_p2'])/3);
               echo " <td>$promedio_p2</td>";
                echo "</table>";
           echo " </td>";

           //periodo 3
           echo " <td>";
               echo " <table class='table-second'>";
              
               echo " <td>".$col['act1_p3']."</td>"; 
                echo "<td>".$col['act2_p3']."</td>";
                echo "<td>".$col['po_p3']."</td>";
                $promedio_p3=round(($col['act1_p3']+$col['act2_p3']+$col['po_p3'])/3);
               echo " <td>$promedio_p3</td>";
                echo "</table>";
           echo " </td>";

           //periodo 4
           echo " <td>";
               echo " <table class='table-second'>";
              
               echo " <td>".$col['act1_p4']."</td>"; 
                echo "<td>".$col['act2_p4']."</td>";
                echo "<td>".$col['po_p4']."</td>";
                $promedio_p4=round(($col['act1_p4']+$col['act2_p4']+$col['po_p4'])/3);
               echo " <td>$promedio_p4</td>";
                echo "</table>";
           echo " </td>";
        
            //ultimas filas
            $promedio_institucional=round(($promedio_p1+$promedio_p2+$promedio_p3+$promedio_p4)/4);
            echo "<td>$promedio_institucional</td>";
            echo "<td>".$col['re1']."</td>";
            echo "<td>".$col['avanzo']."</td>";
            echo "<td>".$col['re2']."</td>";
            $prom_inicial=$promedio_institucional*0.85;
            $nota_avanzo=$col['avanzo']*0.15;
            $promedio_final=round($prom_inicial+$nota_avanzo);
            echo "<td>$promedio_final</td>";
            if($promedio_final>=6){
                echo "<td class='aprobado'>APROBADO</td>";
            }else{
            echo "<td class='reprobado'>REPROBADO</td>";
            }
            
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
   
        <form action="sendinfo_C2.php" method="post">
        <center><h2>Ingreso de notas por periodo</h2></center>
           <center> <label>ID: </label>
            <input type="text"  name="id" class="nie" require><br>
            </center>
            <label>Actividad 1:<label>
                <input type="text" name="act1" class="act">

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