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

  function incrementa(&$val1){
    $val1++;
    return $val1;
  }
$numero = 5;

echo incrementa($numero) . "<br>";

echo $numero;
 ?>

</body>
</html>
