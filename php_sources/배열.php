<?php 
  //배열에 for문 사용하기
  $score = array(75,85,93,87,92);

  for ($i=0;$i<=4;$i++)
      echo "인덱스".$i.":".score[$i]."<br>";


  //배열과 합계/평균 구하기
  $score = array(75,85,93,87,92);
  $length = count($score); //count함수는 배열의 요소 개수를 센다
  $sum=0;

  for ($i=0;$i<$lengh;$i++)
  $sum += $score[$i];



  //연관 배열
  //연관 배열 요소의 키와 값 추출하기
  $member = array("id"=> "hong77","pass"=>"12345", "name"=>"홍길동","age"=>"30");

  foreach($memeber as $key=>$value) {
    echo "키 :".$key ;
    echo "값 :".$value ;
    echo "<br>";
  }

  //2차원 배열 만들기 
  //2차원 배열의 각각의 성적을 출력해보기
  $score = array(array(88,98,96,77,98), array(86,77,86,84,95), array(84,83,95,86,93));

  for($i=0 ; $i<3 ; $i++) {
    for($j=0;$j<5 ; $j++ )
    echo "[".$i."]"."[".$j."]"
  }
  //2차원 배열로 성적 합계와 평균 구하기
  $score = array(array(88,98,96,77,98), array(86,77,86,84,95), array(84,83,95,86,93));

  for($i=0 ; i<3 ; $i++) {
    for($j=0 ; j<5 ; $j++) {
        $sum += $score[$i][$j];
    }
    $avg = $avg / 5;
    $number = $i +1 ;

    echo()
  }

?>