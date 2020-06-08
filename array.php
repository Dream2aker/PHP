<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
        <?php
          $coworkers = array('eoging', 'leezche', 'taehoon', 'megath');
          echo $coworkers[1].'<br>';
          echo $coworkers[3].'<br>';
          echo count($coworkers).'<br>';
          var_dump(count($coworkers)).'<br>';
          array_push($coworkers, 'graphittie');
          var_dump($coworkers);
         ?>
  </body>
</html>
