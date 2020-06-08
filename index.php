<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
        $list = scandir('./data'); //dictory의 file목록을 스캔해서 가져올수 있음. 해당 파일 목록을 배열에 담아서 우리에게 줌.
        var_dump($list);
       ?>
    </ol>
    <h2>
      <?php
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }
        else{
          echo "Welcome";
        }
       ?>
    </h2>
      <?php
        if(isset($_GET['id'])){
          echo file_get_contents("data/".$_GET['id']);
        }
        else{
          echo "Hello, PHP";
        }
      ?>
  </body>
</html>
