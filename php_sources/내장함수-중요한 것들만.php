<?php 
//랜덤수를 발생시키는 함수
echo rand(1,6)."<br>";
$str = "<h3>MYSQL은 PHP와 같이 많이 사용된다.</h3>"

/*특정 포맷으로 출력하기 = prinf() 함수 사용하기
뎅디터나 변수 값을 특정 포맷에 맞추어 출력할 때 사용된다. 
%d : 정수형 숫자
%f : 실수형 숫자 
%s : 문자열
%x : 16진수 숫자 
*/

$name = "솔라" ; 
$age = 20;

printf("%s님의 나이는 %d입니다.", $name, $age);

//특정 문자열로 변환하기 =str_replace()

$tel = "2022-10-30";
$tel2 = str_replace("-","/",$tel);//$tel의 "-"를 "/"으로 바꾼다.
echo $tel2."<br>"; $tel2를 출력한 후 <br>이 이어서 출력된다. 즉 두개의 명령을 출력하고 싶을 때 

$str = "안녕하세요.\n반갑습니다.";
$str2 = str_replace("\n","<br>",$str);
echo $str2;
//$str의 \n를 "<br>"로 바꿔준다.

//알파벳 대소문자 변경하기 에스티알토로 외워주기
/* strtoupper() : 대문자로 변경함
strtolower() : 소문자로 변경
*/
$str = "PHP is fun!";
echo strtoupper($str)."<br>";
echo strtolower($str)."<br>";

//substr() : 문자열에서 특정 문자열을 분리하는데 사용하기

$str = "2022-03-25 21:30:50";
$year = substr($str,0,4);  //위의 문자열의 인덱스인 0번부터 4개의 인덱스를  출력함
$month = substr($str,5,2); //위의 문자열의 인덱스인 5번부터 2개의 인덱스를 출력함 
$day = substr($str,8,2);
$time = substr($str, 11);

echo $year."년<br>";
echo $month."월<br>";
echo $day."일<br>";
echo $time."시간<br>";


//배열 관련 함수
//










?>