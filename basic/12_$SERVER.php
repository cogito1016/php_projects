<?php 
//$_SERVER
//슈퍼 글로벌 변수 중 하나
//슈퍼 골러벌 변수 
//1.PHP자체적으로 내장된 변수
//2.데이터형 = 배열
//3.인덱스값에 따라 여러가지 정보를 받을 수 있음


print "현재 실행중인 파일의 경로와 파일을 표시 : ".$_SERVER['PHP_SELF']."<br>";
print "페이지에 전달된 데이터 표시 : ".var_dump($_SERVER['argv'])."<br>";

//서버 아이피
//서버 호스트명
//리스폰스헤더에 쓰여있는 서버의 소프트웨어 환경
//리퀘스트될때의 프로토콜명과 버전
//페이지에 엑세스할때사용된 리퀘스트의 메소드명
//리퀘스트가 개시된때의 타임스탬프 
//검색인수
//현재 실행파일의 경로를 현재 사용중인 시스템의 최상위 경로부터 표시
//호스트 헤더 내용
//현재 페이지의 이전 페이지
//현재 페이지를 보고있는 유저의 아이피주소
//현재 페이지를 엑세스하고 잇는 호스트명
//...등
?>

