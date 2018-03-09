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

  $num1 = rand(12, 50);
  $po = round($num1/4);
  $res = pow($num1, $po);
  echo "El numero es: " . $num1 . " y su potencia " . $po ." es: " . $res;

 ?>

</body>
</html>
