<html>
<head>
  <title>
  </title>
</head>
<body>

<?php
// definicion de función
echo "Hello <br>";
include("funcion_ext.php"); //Continua ejecutando aun cuando no encuentre el archivo
//require("funcion_ext.php"); //si no encuentra el archivo no ejecuta nada despues del require.
myFunc();
echo "World!!! <br>";
?>

</body>
</html>
