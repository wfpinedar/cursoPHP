<html>
<head>
  <title>
  </title>
</head>
<body>

<?php
 $nombre="Fernando"; // Variable ambito global
 echo $nombre;
 function dameNombre(){
   global $nombre; // para usar la variable que esta global
   echo $nombre;
   $nombre = "Maria"; // variable en el ambito de la funcion
   echo $nombre;
 }
 dameNombre();
 echo $nombre;
?>

</body>
</html>
