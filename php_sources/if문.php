<?php
//if구문
//지하철 기본 요금이 2500원이고 경로우대(65세 이상일 때) 

$age = 30;   //$age(나이)에 30세로 설정
$pay = 2500;  //기본요금은 2500원

if ($age >= 65) {
    $pay=0;   //$age가 30이기 대문에 조건식 30>=65는 거짓이므로  pay=0이라는 결과값이 실행되지 않는다. 
    echo "경로우대 요금이 0입니다";
}
echo "나이 : ".$age. "세<br>";
echo "요금 : ".$pay. "원<br>";

//자격증 합격 불합격 여부 판정

$pilgi=65;
$silgi=90;
$result="불합격";
if($pilgi >= 70 and $silgi >= 70) {
    $result="합격";   //조건문 안에 새롭게 변수를 만들어서 결과값으로 저장하는 것이 가능함
}
echo "필기점수 :".$pilgi."<br>";
echo "실기점수 :".$silgi."<br>";
echo "결과 :".$result;

//if else 구문
//짝수와 홀수 판별하기

$num=12;
if($num %2 ==0) {
    echo %num."은(는) 짝수이다.";

}
else {
    echo %num."은(는) 홀수이다.";

}
//if-elseif-else 문
//if문의 중첩
$now_year = 2022;
$now_month = 4;
$now_day=15;

$birth_year = 2000;
$birth_month = 7;
$birth_day=10;
//4월 전 생일인지 
if ($birth_month < $now_month) {
    $age=$now_year - $birth_year;

}
//4월이 생일인지
elseif ($birth_month == $now_month) {
    $age=$now_year - $birth_year;

    else {
        $age=$now_year-$birth_year-1;
    }




}
else {
    $age=$now_year-$birth_year-1;

}

echo "나의 나이는 ".$age."세입니다.";

?>
