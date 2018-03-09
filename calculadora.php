<?php
  if (isset($_POST["button"])) {
      $n1 = $_POST["num1"];
      $n2 = $_POST["num2"];
      $operacion = $_POST["operacion"];
      calcular($n1,$n2,$operacion);
  }
    function calcular($n1,$n2,$op)
    {
        if (!strcmp("Suma", $op)) {
            echo "Resultado es: " . ($n1+$n2);
        } elseif (!strcmp("Resta", $op)) {
            echo "Resultado es: " . ($n1-$n2);
        } elseif (!strcmp("Multiplicación", $op)) {
            echo "Resultado es: " . ($n1*$n2);
        } elseif (!strcmp("División", $op)) {
            echo "Resultado es: " . ($n1/$n2);
        } elseif (!strcmp("Modulo", $op)) {
            echo "Resultado es: " . ($n1%$n2);
        } else {
            echo "Error en la operación";
        }
    }
