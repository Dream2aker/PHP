<?php
  require('lib/print.php'); //필요한 library를 가져오는 것 (중복으로 사용되는 코드 & function)
  require('view/top.php');
 ?>
    <a href="create.php">create</a>
    <?php
      if(isset($_GET['id'])){  ?>
        <a href="update.php">update</a>
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

      <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>">  <!-- 현재의 id title 값을 old title로 주는데 hidden이므로 보이지 않게 입력됨 -->
        <p>
            <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
        </p>
        <p>
            <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
      </form>
<?php
 require('view/bottom.php'); //require로 필요한 library를 가져오는 것 (중복으로 사용되는 코드 & function)
?>
