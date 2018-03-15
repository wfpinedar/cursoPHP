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

    include('herencia.php');

    $kawa= new Moto();
    $lexus = new Carro();

    echo "El carro tiene " . $lexus->get_ruedas() . " y la moto " . $kawa->get_ruedas() . "<br>";

    $kawa->Encender();

    $kawa->Parar();

    $kawa->Establece_color("Rojo","Kawasaki");

 ?>

</body>
</html>
