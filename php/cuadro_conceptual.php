<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/tabla_1P.css">
    <title>Cuadro de Notas Conceptual</title>
</head>
<body>
<div id="Container">
    <center><h1>Cuadro Conceptual "K" GRADO "1"</h1></center>
<!--div para el manejo de botones en cuadro-->
<div class="buttons">
  <a href="cuadroA(2).php"><input class="save " type="button" value="Actualizar" ></a><br>
  <input class="save " type="submit" value="Guardar" name="submit"><br>
  <input class="save " type="submit" value="Imprimir" name="submit"><br>
</div>
<!--div de la caja principal-->
    <div id="table_principal">
    <table class="table_one">
    <tr class="celda_encabezado">
            <td rowspan="2" class="n"><b>N°</b></td>
            <td rowspan="2" class="col3"><b>NIE</b></td>
            <td rowspan="2" class="col1"><b>Nombre del estudiante</b></td>
            <td class="periodo"><b>Periodo 1</b></td>
            <td class="periodo"><b>Periodo 2</b></td>
            <td class="periodo"><b>Periodo 3</b></td>
            <td class="periodo"><b>Periodo 4</b></td>
            <td rowspan="2" class="col2" ><b>PMF</b></td>
            <td rowspan="2" class="col2"><b>R,E1</b></td>
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
     $formatter = new NumeroALetras();
     echo $formatter->toWords($number, $decimals);

     