<?php
  require_once('lib/print.php'); // 이 php문은 없어도 되는 건데 아래 본문에 쓰임 함수 "print_title, print_list"가 어디서 오는지 알려주는 정보의 역할로 쓰임.
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        print_title()
       ?>
     </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
        print_list()
       ?>
    </ol>
