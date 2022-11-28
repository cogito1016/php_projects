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

?>