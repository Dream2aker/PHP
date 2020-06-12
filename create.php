<?php
  require('lib/print.php'); //필요한 library를 가져오는 것 (중복으로 사용되는 코드 & function)
  require('view/top.php');
 ?>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">   <!-- 입력된 정보를 URL 형태로 create_process.php에 전송하는데 URL에 들어나지 않는 hidden으로 전달  -->
      <p>
          <input type="text" name="title" placeholder="Title">
      </p>
      <p>
          <textarea name="description" placeholder="Description"></textarea>
      </p>
      <p>
          <input type="submit">
      </p>
    </form>
<?php
  require('view/bottom.php'); //require로 필요한 library를 가져오는 것 (중복으로 사용되는 코드 & function)
?>
