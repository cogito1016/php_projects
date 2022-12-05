<?php 

//기본선언
function sum($a1, $a2){
    return $a1+$a2;
}
print sum(1,2)."<br>";

//디폴트값 설정
function sum_default($a1=50, $a2=100){
    return $a1+$a2;
}
print sum_default()."<br>";
print sum_default(1)."<br>";

?>