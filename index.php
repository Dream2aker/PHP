<?php
  require_once('lib/print.php'); //require로 필요한 library를 가져오는 것 (중복으로 사용되는 코드 & function)
  require_once('view/top.php'); //require만 사용할 경우 중복이 불가능하므로 해당 library를 타 페이지에서 require를 통해 가져올 수 없음. 이를 방지하기 위해 require_once(한번만 가져오는)를 사용함.
 ?>
    <a href="create.php">create</a>
    <?php
      if(isset($_GET['id'])){  ?>
      <a href="update.php?id=<?=$_GET['id']?>">update</a>

    <form action="delete_process.php" method="post">    <!-- delete 값을 GET으로 보내면 또다시 url에 포함된 파라미터로 인해 관련 웹페이지가 삭제 될 수 있으므로 post형식으로 전달해야함./ -->
        <input type="hidden" name="id" value="<?=$_GET['id'] ?>">
        <input type="submit" value="Delete">
      </form>
    <?php
      } ?>
    <h2>
      <?php
        print_title()
       ?>
    </h2>
      <?php
        print_description()
      ?>
<?php
  require('view/bottom.php'); //require로 필요한 library를 가져오는 것 (중복으로 사용되는 코드 & function)
 ?>
 
