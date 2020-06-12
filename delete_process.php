<?php
  unlink('data/'.$_POST['id']); // unlink로 들어온 id를 삭제
  header('Location: /index.php'); //id 삭제 후 홈으로 이동
 ?>
