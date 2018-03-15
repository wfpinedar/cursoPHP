<?php
  /**
   *
   */
  class Carro
  {
      protected $ruedas;
      var $color;
      var $motor;

      public function Carro()
      {
          $this->ruedas=4;
          $this->color="";
          $this->motor=1600;
      }

      public function Encender()
      {
          echo "Estoy Encendiendo <br>";
      }

      public function Andar()
      {
          echo "Estoy Andando <br>";
      }

      public function Girar()
      {
          echo "Estoy Girando <br>";
      }

      public function Parar()
      {
          echo "Estoy Parando <br>";
      }

      public function Apagar()
      {
          echo "Estoy Apagandome, !Adios¡";
      }

      public function Establece_color($color_carro, $nombre_carro)
      {
          $this->color=$color_carro;

          echo "El color de ". $nombre_carro ." es: " . $this->color . "<br>";
      }
      function get_ruedas(){
        return $this->ruedas;
      }
  }

  //-----------------------------------------------------------

  class Moto extends Carro
  {

      public function Moto() //Metodo Constructor
      {
          $this->ruedas=2;
          $this->color="";
          $this->motor=300;
      }

      function Encender(){
        parent::Encender();
        echo "Moto ya Arranco <br>";
      }
      public function Establece_color($color_moto, $nombre_moto)
      {
          $this->color=$color_moto;

          echo "El color de ". $nombre_moto ." es: " . $this->color . "<br>";
      }
  }
