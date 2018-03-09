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

  $var1 = 1;

  while($var1 < 6){
    echo "Estamos ejecutando el codigo del bucle while" . $var1 . " <br>";
    $var1++;
  }
  echo "Hemos salido del ciclo ". $var1. "<br>";

  do {
    echo "Estamos ejecutando el codigo del bucle do while" . $var1 . " <br>";
    $var1--;
  }
  while($var1 > 1);
  echo "Hemos salido del ciclo ". $var1;

 ?>

</body>
</html>
