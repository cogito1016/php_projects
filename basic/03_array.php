<?php

$space = array();

$space[0] = "earth";
$space[1] = "moon";

print "0번인덱스의 값은 {$space[0]} 1번인덱스의 값은 {$space[1]}<br>";

//php의 array의 인덱스는 문자열도 가능하다.
$space['key1'] = "value1";
$space["key2"] = "value2";
//즉, array는 배열임과 동시에 map역할도 하는 것 같다.
print "key1인덱스의 값은 {$space['key1']} key2인덱스의 값은 {$space["key2"]}<br>";

$array = array("index1" => "value1", "index2" => "value2", 1 => "value3", "index3" => 2);

print "index 1 = {$array['index1']}<br>";
print "index 2 = {$array['index2']}<br>";
print "1 = {$array['1']}<br>";
print "index 3 = {$array['index3']}<br>";

//array_push 배열에 값 추가 
$fruit = array();
array_push($fruit, 'apple', 'banana');
array_push($fruit, 'grape', 'orange');
print "fruit출력 {$fruit[0]} {$fruit[1]} {$fruit[2]} {$fruit[3]}<br>";

//var_dump 배열이 구조 보기
//var_dump 만으로는 보기어려우니 pre와 함께 씀
var_dump($fruit);
print "<br>";
print "<pre>";
var_dump($fruit);
print "</pre>";

//list를 사용하여 배열 값 출력
list($first, $second, $third) = $fruit;
print "{$second}<br>";

//range 특정범위의 수를 배열로 만들기
$num = range(1, 10); // 1~10
print "<pre>";
var_dump($num);
print "</pre>";

//range 에 간격 설정
$num2 = range(1, 10, 3); // 1 4 7 10
print "<pre>";
var_dump($num2);
print "</pre>";

//count 배열개수 확인
print count($fruit) . "<br>";
?>