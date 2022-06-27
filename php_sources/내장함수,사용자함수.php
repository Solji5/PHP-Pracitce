<?php
  //내장함수
  $string = "php is fun.";
  //strlen($string) : $string의 길이를 저장하는 함수 
  $length = strlen($string);
  echo $length."<br>";
  
  //str_replace("php","PHP",$string)=$string함수의 php부분을 PHP로 바꿔주기
  $string2 =str_replace("php","PHP",$string);
  

  //사용자 함수 
  //매개변수로 정수의 합을 구하기
  function hap($n) {
    $sum = 0;     //사용자 정의 함수 안에서 지역 변수를 설정한다. 
    for ($i=1;$i<=$n;i++)  //사용자 정의 함수 안에서의 
    $sum +=$i;

    return $sum;
  }

  echo hap(10) ."<br>"
  echo hap

  //함수로 놀이공원 입장료 계산하기 
  function ticket1()