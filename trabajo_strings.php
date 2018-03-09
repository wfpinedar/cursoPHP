<html>
<head>
  <title>
    Document sin titulo
  </title>
  <style>
    .resaltar{
      color: #F00;
      font-weight: bold;
    }
  </style>
</head>
<body>

<?php

  echo "<p class='resaltar'> Esto es un ejemplo de frase </p>";

    $nombre="fercho";

    echo "Hola $nombre <br>";

    $variable1 = "CASA";
    $variable2 = "casa";

    $resultado = strcmp($variable1, $variable2); // devuelve 1 si no son iguales y cero si lo son.
    $resultado2 = strcasecmp($variable1, $variable2); // devuelve 1 si no son iguales y cero si lo son.

    echo "<br> El resultado de strcmp es:" . $resultado;
    echo "<br> el resultado de strcasecmp es:" . $resultado2;

 ?>

</body>
</html>
