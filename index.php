<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <!-- <ol>
      <li><a href="index.php?id=HTML">HTML</a></li>
      <li><a href="index.php?id=CSS">CSS</a></li>
      <li><a href="index.php?id=JavaScript">JacaScript</a></li>
    </ol> -->
    <ol>
      <?php
      $lists = scandir('./data');
      foreach ($lists as $list) {
        if(in_array($list, ['.','..']))
          continue;
          ?>
          <li><a href="index.php?id=<?=$list?>"><?=$list?></a></li>
          <?php
      }
       ?>
    </ol>

    <h2>
      <?php
      if(isset($_GET['id'])) {
        echo $_GET['id'];
      } else {
        echo "Welcome!";
      }
       ?>
    </h2>

    <h2>
    <?php
    if(isset($_GET['id'])) {

      echo file_get_contents("data/".$_GET['id']);
      //echo "1";
      if($_GET['id']=='HTML'){
        echo "Good";
      } elseif ($_GET['id']=='CSS') {
        echo "Wow";
      } else {
        echo "I don't know";
      }
    } else {
      echo "Hello, PHP!";
    }
     ?>
    </h2>
  </body>
</html>
