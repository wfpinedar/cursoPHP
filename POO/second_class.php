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

    include('vehiculos.php');

    $kawa= new Moto();
    $lexus = new Carro();

    echo "El carro tiene " . $lexus->ruedas . " y la moto " . $kawa->ruedas;

    $kawa->Encender();

    $kawa->Parar();

 ?>

</body>
</html>
