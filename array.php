<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $coworkers = array('soohyun', 'seongguk', 'jihyun', 'sanghyun', 'sukju');
    echo $coworkers[0].' '.$coworkers[1].' '.$coworkers[2].' '.$coworkers[3].' '.$coworkers[4];
    echo "<br><br>";
    var_dump(count($coworkers));
    array_push($coworkers, 'heyJude');
    var_dump($coworkers);
     ?>
  </body>
</html>
