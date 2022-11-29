<?php

//일반 반복문
for ($i = 0; $i < 10; $i++) {
    print $i . "<br>";
}

//forEach 반복문
$memberList = ['김재형', '안승훈', '김가현', '오진선', '구자민', '나지원', '윤준식'];
$memberListCount = count($memberList);
// for ($i = 0; $i < $memberListCount; $i++) {
//     print $memberList[$i] . "<br>";
// }

//foreach ( array as-Keyword variable ) { }  
foreach ($memberList as $member) {
    print $member . "<br>";
}

//foreach에서 index, value 모두를 얻는 법
foreach ($memberList as $index => $value) {
    print $index . " 인덱스의 값은 " . $value . "<br>";
}


?>