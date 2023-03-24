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
       <h1 id="consulta">Consulta de notas</h1> 
       <img id="decoracion" src="/control_de_notas/images/profesor.png">
       <br><br><br><br><br><br><br><br>

       <!--Formulario-->
       <div class="formulario">
            <h1 id="inicio">Elija la secci&oacute;n y grado deseado</h1>
            <form method="post" onsubmit="return confirmacion()" action="cuadro2.php">
                <div class="username">
                    
                </div>
                <select id="anio" name="anio">
                    <option disabled selected="">Selecciona un a&ntilde;o</option>
                    <option>1</option>
                    <option>2</option>
                </select>
                <select class="seccion" id="seccion" name="seccion">
                    <option disabled selected="">Selecciona una secci&oacute;n</option>
                    <option>A</option>
                    <option>F</option>
                    <option>E</option>
                    <option>H</option>
                    <option>G</option>
                    <option>D</option>
                </select>
                <div class="username">

                </div>

                <input type="submit" value="Aceptar">
                <div class="Registrar"></div><br>
                <input type="submit" value="Cancelar">
                <div class="Registrar"></div>
            </form>
           
           <script>
            //creamos la funcion, capturamos el valor selecionado en variables con el DOM
  function confirmacion() {
    var seccion = document.getElementById("seccion").value;
    var anio = document.getElementById("anio").value;
    //creamos otra variable para capturar el mensaje que contenga las otras 2 valriables y luego lo retornamos
    var mensaje = "¿Son correctos los valores seleccionados?\n\nSección: " + seccion + "\nAño: " + anio;
    return confirm(mensaje);
  }
</script>
       </div>
    </body>
</html>