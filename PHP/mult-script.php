<!DOCTYPE html>
      <HEAD>
            
            
        <LINK REL=StyleSheet HREF="format.css" TYPE="text/css" MEDIA=screen>
        <link rel="Shortcut icon" href="imagenes/LOGO.png">
        <TITLE>Multiplicatronico</TITLE>
      </HEAD>

      <BODY>

          <!--p div align="center" style="font-size:300%"><B > Pagina en desarrollo (AFTW)</B></p-->

          <div class="menu">
          <ul>
            <div class="imagenLogo"> <li><img src="imagenes/LOGO.png" height="50" width="50"></li> </div>
          </ul>
        </div>
            
            
        

        <!-- CUERPO-->
        <div class="contenido">
            <div class="fondoTrasMenu"></div>
            
              
              <div class="subtitulo1"><b class="textoBlanco">Copia y pega</b></div>
              <br>
			  <br>
			  <?php 

$n = 1;
$contador = $_REQUEST["cont"]; //1 o 0 bool



while ($n < $_REQUEST["num"]+1){

echo "<center>";
if ($contador == 1) echo $n . "- ";
echo $_REQUEST["repet"];
echo "<br>";
echo "</center>";
$n++;
}

if ($_REQUEST["num"] <= 0 || $_REQUEST["num"] == null){

echo "no ingresaste un valor o no es valido 
si es asi usa uno diferente y mayor a 0 :)";
}

?>

              			  




</HTML>