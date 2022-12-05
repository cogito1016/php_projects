<?php 
//타임스탬프 time()
print time()."<br>";

//포맷입히기
print date('Y-m-d',time())."<br>";

//특정시간을 타임스탬프로
//1995 10 16 16:10:30
print mktime(16,10,30,16,10,1995)."<br>";
print date('Y-m-d',mktime(16,10,30,16,10,1995))."<br>";

//특정 시간에만 특정 명령어 작동
//start : 22.12.05 19:00:00
//end : 22:12.05 19:00:30

$start_time = mktime(19,00,00,5,12,22);
$end_time = mktime(19,00,30,5,12,22);

$nowTime = time();

if($nowTime>=$start_time && $nowTime <= $endTime){
    print "현재 이벤트에 참여할 수 있는 시간입니다<br>";
}else{
    print "참여 불가 시간입니다<br>";
}

?>