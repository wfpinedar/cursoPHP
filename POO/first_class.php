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
  /**
   *
   */
  class Carro
  {
    var $ruedas;
    var $color;
    var $motor;

    function Carro()
    {
      $this->ruedas=4;
      $this->color="";
      $this->motor=1600;
    }

    function Encender(){
      echo "Estoy Encendiendo";
    }

    function Andar(){
      echo "Estoy Andando";
    }

    function Girar(){
      echo "Estoy Girando";
    }

    function Parar(){
      echo "Estoy Parando";
    }

    function Apagar(){
      echo "Estoy Apagandome, !Adios¡";
    }

  }


  $renault = new Carro();
  $honda = new Carro();
  $mazda = new Carro();

  $mazda->Girar();

  echo "<br> Ruedas = " . $mazda->ruedas;

 ?>

</body>
</html>
