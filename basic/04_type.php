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
?>