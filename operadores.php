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

  $var1 = true;
  $var2 = true;
  $var3 = $var1 && $var2;

  if ($var3==true){
      echo "El resultado es Correcto: ". $var3;
  } else {
    echo "El resultado es INCORRECTO!!!: ". $var3;
  }


 ?>

</body>
</html>
