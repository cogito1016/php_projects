<?php 

//max
$arr = range(1,1000);
print " 가장 큰 수 : ".max($arr)."<br>";
print " 가장 작은 수 : ".min($arr)."<br>";

//실수 반올림
print " 4.2반올림 : ".round(4.2)."<br>";
print " 4.6반올림 : ".round(4.6)."<br>";
print " 1.4반올림이면서 2자리수 표시 : ".round(1.4,2)."<br>";

//정수 반올림
//맨끝자리가 0 자리수
print " 1234에서 숫자2를 반올림 : ".round(1234,-2)."<br>";

//실수 내림
print " 4.2내림 : ".floor(4.2)."<br>";

//실수 올림
print " 4.2올림 : ".ceil(4.2)."<br>"; 

//숫자를 3자리씩 구분해서 , 표시
$number = 123456789;
print "구분해서 표시 : ".number_format($number)."<br>";

//숫자 세자리 구분 + 소숫점 2자리까지
$float_number= 123456789.1234;
print "구분 + 소숫점2자리 : ".number_format($float_number, 2)."<br>";

//숫자 쉼표와 마침표(소숫점표기)를 이상하게 바꾸기 (커스텀)
print "구분 + 소숫점2자리 + 기호 커스텀 : ".number_format($float_number,2,"-",":")."<br>";

//랜덤값
$random_val = rand(1,10);
print "랜덤 값 : ".$random_val."<br>";
?>