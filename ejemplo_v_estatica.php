<html>
<head>
  <title>
  </title>
</head>
<body>

<?php
  function incrementaVar(){
    static $contador=0;
    $contador++;
    echo $contador . "<br>";
  }

  incrementaVar();
  incrementaVar();
  incrementaVar();
  incrementaVar();
  incrementaVar();

 ?>

</body>
</html>
