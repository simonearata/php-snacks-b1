<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
  </head>
  <body>
    
    <h1>Snack 1</h1>

    <?php
      $matchTeams = [
        
        [
          'squadra1' => 'Olimpia Milano',
          'squadra2' => 'Cantù',
          'punti1' => '55',
          'punti2' => '60',
        ],

        [
          'squadra1' => 'Roma',
          'squadra2' => 'Lazio',
          'punti1' => '37',
          'punti2' => '40',
        ],

        [
          'squadra1' => 'Lakers',
          'squadra2' => 'Juve',
          'punti1' => '120',
          'punti2' => '30',
        ],
      ];

      var_dump($matchTeams);
    ?>

    
    
    <?php foreach ($matchTeams as $match){ ?>
      <h2>
        <?php echo $match['squadra1'] ?> - <?php echo $match['squadra2'] ?>
      </h2>
      <h4>
        <?php echo $match['punti1']?> - <?php echo $match['punti2']?>
      </h4>
    <?php } ?>

    
    






  </body>
</html>