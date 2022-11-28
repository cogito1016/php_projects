<?php
//다른 언어와 다르게 PHP는 타입을 자동으로 지정해준다.
//javascript마냥.
//문제가 많다. 흑흑 화가나

//gettype으로 타입을 알 수 있다.
$num = 12;
print gettype($num) . "<br>";

$str = "Hello";
print gettype($str) . "<br>";

$double = 3.141592;
print gettype($double) . "<br>";

$array = array(1, 2, 3, 4);
print gettype($array) . "<br>";

$null = null;
print gettype($null) . "<br>";

$boolean = true;
print gettype($boolean) . "<br>";

//형변환
//데이터 형 지정 변환 방법
$str = "hi";
$str = (int) $str; // 문자열->숫자 변환이 안되므로 0이 디폴트로 대입됨.
print "값은 : {$str} 타입은 : " . gettype($str) . "<br>";

$str = "123hi";
$str = (int) $str; //문자열앞에 숫자가있으면 그건 변환함
print "값은 : {$str} 타입은 : " . gettype($str) . "<br>";

$str = "hi456";
$str = (int) $str; //근데 뒤는 변환안함
print "값은 : {$str} 타입은 : " . gettype($str) . "<br>";

?>