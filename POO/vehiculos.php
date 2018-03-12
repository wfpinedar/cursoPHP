<?php
  /**
   *
   */
  class Carro
  {
      public $ruedas;
      public $color;
      public $motor;

      public function Carro()
      {
          $this->ruedas=4;
          $this->color="";
          $this->motor=1600;
      }

      public function Encender()
      {
          echo "Estoy Encendiendo";
      }

      public function Andar()
      {
          echo "Estoy Andando";
      }

      public function Girar()
      {
          echo "Estoy Girando";
      }

      public function Parar()
      {
          echo "Estoy Parando";
      }

      public function Apagar()
      {
          echo "Estoy Apagandome, !Adios¡";
      }

      public function Establece_color($color_moto, $nombre_moto)
      {
          $this->color=$color_moto;

          echo "El color de ". $nombre_moto ." es: " . $this->color . "<br>";
      }
  }

  //-----------------------------------------------------------

  class Moto
  {
      public $ruedas;
      public $color;
      public $motor;

      public function Moto()
      {
          $this->ruedas=2;
          $this->color="";
          $this->motor=300;
      }

      public function Encender()
      {
          echo "Estoy Encendiendo";
      }

      public function Andar()
      {
          echo "Estoy Andando";
      }

      public function Girar()
      {
          echo "Estoy Girando";
      }

      public function Parar()
      {
          echo "Estoy Parando";
      }

      public function Apagar()
      {
          echo "Estoy Apagandome, !Adios¡";
      }

      public function Establece_color($color_moto, $nombre_moto)
      {
          $this->color=$color_moto;

          echo "El color de ". $nombre_moto ." es: " . $this->color . "<br>";
      }
  }
