<?php
  //switch문 
  //내가 좋아하는 색깔 
  $my_color = "노랑";

  switch($my_color){
    case "빨강" :
        echo "나는 ".$my_color."을 좋아합니다.";
        break;
    case "노랑" :
        echo "나는 ".$my_color."을 좋아합니다.";
        break;
    case "파랑" :
        echo "나는 ".$my_color."을 좋아합니다.";
        break;

    default :
        echo $my_color."은 내가 좋아하는 색상이 아닙니다.";

  }

  //while문
  //if문과 다른 점은 while과 for문은 반복할 수 있다.(반복문)

  $x=1; //$x를 1로 초기화한다.
  while($x <=5){
    echo "안녕하세요.<br>";
    $x++;
    //$x가 1에서 5까지의 값을 가지는 동안 조건문 $x <=5은 참이 되고 그동안 안녕하세요.<br>이 실행된다. 루프가 진행되는 동안 6행에 의해 $x의 값은 1씩 증가한다.

  }
  //while문으로 정수 합계 구하기
  $x=1;
  $sum=0; //$sum = 누적합계를 의미하므로 $sum을 0으로 초기화한다.
  while ($x <=100){
    $sum +=$x;   //$sum=$sum+$x
    $x++;       //$x=$x+1
  }
  echo "합계 : ".$sum;

  //while문으로 5의 배수 합계 구하기
  $x =1;
  $sum =0;

  while($x<=100){
    if($x%5==0) {
        $sum += $x;      //$sum=$sum+$x
    }
  }
  echo "5의 배수 합계 :".$sum;

  //마일 킬로미터 환산표 만들기

  echo "----------------------<br>";
  echo "----------------------<h2>마일 킬로미터</h2>";
  echo "----------------------<br>";

  $mile = 10;
  while($mile <= 50) {
    $km = $mile *10;
    $km= $round($km,2);     //round함수는 반올림할 때 사용함
    echo $mile."&nbsp;".$km."<br>";
    $mile+=10;

  }


  //for문으로 섭씨/화씨 환산 테이블 만들기
  echo "<table>";
  echo "<tr><th width='10'>섭씨</th><th width='100'>화씨</th>";    //테이블 가로와 세로 설정
  for ($c=-10; $c<=30;$c+=5) {
    $f = ($c * 9/5)+32;
    echo "<tr><th>$c</th><th>$f</th>";

  }
  echo "</table>";

  //위의 섭씨/화씨 환산 테이블을 변수에 저장하기
  $string ="";     //table을 저장할 변수 선언하기 

  $string .="<table border='1'>";
  $string .="<tr><th width='10'>섭씨</th><th width='100'>화씨</th>";    //$string . =($string에 도형저장하기)
  //빈테이블을 $string에 저장함
  for($c=-10;$c<=30;$c+=10) {
    $f = ($c *9/5) + 32;
    $string.="<tr><th>$c</th><th>$f</th>";


  }
  $string.="</table>";
  echo $string;   //$string을 호출하면 변수에 저장한 표가 출력됨

  //이중 for문
  //이중 for문으로 구구단 출력하기
  for($i=2; $i<=9;i++) {
    echo $i."단 : ";
    for ($j=1; $j<=9 ; j++){
        $x =$i * $j;
        echo $i."x".$j."=".$x;
    }
    echo "<br>";
  }


  //숫자를 삼각형 형태로 출력하기
  for ($i=1;i<=9;i++){
    for ($j=1;$j<=$i;j++){
        echo $i;
        /*$j는 1에서 $i까지의 값(1씩 증가)을 가진다.
        $i=1일 때 내부조건식의 $j=1이므로 $j는 $i=1일 때만 조건식이 참이되어 1하나가 출력됨
        
        $i=2일 때 내부조건식의 $j<=2가 되기 때문에 $j는 1~2까지 출력되고 i값만이 출력되므로 22가 출력됨*/

    }
  }

  //숫자를 역삼각형 형태로 출력하기
  for ($i=9;i>=1;i--){
    for ($j=9;$j<=$i;j--){
        echo $i;
    }
    echo "<br>";
  }

  //별표(*)로 삼각형 형태를 출력하기
  for ($i=1;$i<=9;$i++) {
    //빈칸 부분 출력하기(빈 앞부분)
    for ($j=1; $j<=9-$i; $j++){
        echo "&nbsp";
    }
    //별부분 출력하기(빈 뒷부분)
    for ($j=1;$j<=$i;$j++) {
        echo "*";
    }
    echo "<br>";
  }

  

  



?>