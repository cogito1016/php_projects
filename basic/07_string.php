<?php
//문자열 시작과 끝에있는 공백 제거
$blankStr = "   공백 진짜 많 G U ?    ";
print "---" . $blankStr . "---" . "<br>";
print "양쪽 공백을 다 지운다면 - trim()" . "<br>";
print "---" . trim($blankStr) . "---" . "<br>";
print "왼쪽 공백을 지운다면 - ltrim()" . "<br>";
print "---" . ltrim($blankStr) . "---" . "<br>";
print "오른쪽 공백을 지운다면 - rtrim()" . "<br>";
print "---" . rtrim($blankStr) . "---" . "<br>";

//대,소문자로 출력
$mixedStr = "aBcDeFg";
print "대문자로만 : " . strtoupper($mixedStr) . "<br>";
print "소문자로만 : " . strtolower($mixedStr) . "<br>";

//문자열 수 세기
$longCountStr = "abcdefghijklmnop";
print $longCountStr . " 문자열의 수 : " . strlen($longCountStr) . "<br>";

//문자열 특정 문자 치환
$replaceTargetStr = "welcome to everdevel";
$replaceStr = str_replace("everdevel", "hell", $replaceTargetStr);
print "치환결과 : " . $replaceTargetStr . "<br>"; //이러면 바뀐게없다. 결과값을 사용해야 한다.
print "치환결과 : " . $replaceStr . "<br>"; //이러면 바뀐게없다. 결과값을 사용해야 한다.

//문자열 자릿수로 자르기
$slicedTargetStr = "helloWorld";
$slicedStr = substr($slicedTargetStr, 0, 5);
print "잘리기 전 결과 : " . $slicedTargetStr . "<br>";
print "잘린 후 결과 : " . $slicedStr . "<br>";

//특정문자 위치찾기
$locationTargetStr = "web development d";
$findWord = "d";
$pos = strpos($locationTargetStr, $findWord);
print "찾을문자열의 위치는 : " . $pos . "<br>";
?>