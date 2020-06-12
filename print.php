<?php
function print_title(){
  if(isset($_GET['id'])){
      echo htmlspecialchars($_GET['id']);
  }
  else{
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
    echo htmlspecialchars(file_get_contents("data/".$_GET['id'])); //보안을 위해 htmlspecialchars로 감싸줌
  }
  else{
    echo "Hello, PHP";
  }
}
function print_list(){
  $list = scandir('./data'); //dictory의 file목록을 스캔해서 가져올수 있음. 해당 파일 목록을 배열에 담아서 우리에게 줌.
  $i = 0; //while문 사용시 반드시 잊지말것 1
  while ($i < count($list)){ //$i가 0부터 $list객수보다 작을때까지 while 돌려
    $title = htmlspecialchars($list[$i]); // 보안 문제로 list 값을 감싸줌
    if($list[$i] != '.'){ //$list 값 중 '.', '..'을 제외 하는 방법 if문사용.
      if($list[$i] != '..'){
        echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n"; //$list 내 $i 수까지 리스트할 것. 근데 hiperlink를 통해 과련 리스트 클릭시 해당 페이지 이동
      }
    }
    $i = $i + 1; //while문 사용시 반드시 잊지말것 2
  }
}
?>
