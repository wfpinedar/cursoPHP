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

    function Establece_color($color_carro,$nombre_carro){
      $this->color=$color_carro;

      echo "El color de ". $nombre_carro ." es: " . $this->color . "<br>";

    }

  }


  $renault = new Carro();
  $honda = new Carro();
  $mazda = new Carro();

  $mazda->Girar();

  echo "<br> Ruedas = " . $mazda->ruedas . "<br>";

  $renault->Establece_color("Rojo","Renault");
  $mazda->Establece_color("Azul", "Mazda");
 ?>

</body>
</html>
