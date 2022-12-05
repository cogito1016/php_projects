<?php

//변수 선언되있는지 확인이 필요한 경우 isset()
//return boolean
$declare = 100;
print isset($declare)."<br>";
print isset($no_declare)."<br>";

//변수에 데이터형 지정하기 settype()
$origin_number = 100;
print "값 : ".$origin_number." 타입 : ".gettype($origin_number);
print "<br>";
settype($origin_number, "string");
print "값 : ".$origin_number." 타입 : ".gettype($origin_number);
print "<br>";
//값을 할당하여 타입을 모르는 경우에는 NOTICE Undefined variable: temp on line number 9 
//따라서 값 : 타입 : NULL
$temp;
print "값 : ".$temp." 타입 : ".gettype($temp);
print "<br>";
//빈 변수에 타입 할당 시 
//값 : 0 타입 : integer
settype($temp,"integer");
print "값 : ".$temp." 타입 : ".gettype($temp);
print "<br>";
?>