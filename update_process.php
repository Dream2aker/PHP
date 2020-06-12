<?php
  rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']); // 올드 title을 새로 입력된 title로 바꿈
  file_put_contents('data/'.$_POST['title'], $_POST['description']);
  header('location: /index.php?id='.$_POST['title']); //입력한 title id 값으로 위치이동
?>
