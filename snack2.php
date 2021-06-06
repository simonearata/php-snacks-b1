<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
  

<?php

  $dati = $_GET;

  if(strlen($dati['nome']) <= 3) {
    echo "inserire più lettere";
  }
  elseif(strpos($dati.['mail'], '@') === false ) { // || strpos($dati.['email'], '.')) {
    echo "inserire i caratteri corretti";
  }
  elseif(is_numeric($dati['eta'])) {
    echo "inserire un numero";
  }
  else{
    echo "accesso riuscito";
  }

?>


</body>
</html>