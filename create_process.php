<?php
  file_put_contents('data/'.$_POST['title'], $_POST['description']);
  header('location: /index.php?id='.$_POST['title']); // header는 다른 방향으로 보내는 것. 즉, title에 해당하는 id를 같는 주소로 변경함.
 ?>
