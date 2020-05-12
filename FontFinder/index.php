<?php
    //쿠키 받아오기
    $emailCookie = htmlentities($_COOKIE["email"], ENT_QUOTES);
    setCookie("email",$emailCookie,time() + 10000);
    $nameCookie = htmlentities($_COOKIE["name"], ENT_QUOTES);
    setCookie("name",$nameCookie,time() + 10000);
    $uuidCookie = htmlentities($_COOKIE["uuid"], ENT_QUOTES);
    setCookie("uuid",$uuidCookie,time() + 10000);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $uuid = $_POST["uuid"];
    $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
    $font1=array('Noto%20Sans%20KR','Do Hyeon','Gothic A1','Black Han Sans','Sun flower','Noto Serif KR','Jua','Gugi','Dokdo', 'Gaegu');

    session_start();


    $_SESSION["uuid"] = $uuidCookie;
    $_SESSION["email"] = $emailCookie;
    $_SESSION["name"] = $nameCookie;

    if(!isset($uuid)){
        $uuid = $_SESSION["uuid"];
        $email =   $_SESSION["email"];
        $name = $_SESSION["name"];
    }


    include_once "insertUuid.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FontSite</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Do+Hyeon|Dokdo|Gaegu|Gothic+A1|Gugi|Jua|Noto+Sans+KR|Noto+Serif+KR|Sunflower:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script|Nanum+Gothic|Nanum+Gothic+Coding|Nanum+Myeongjo|Nanum+Pen+Script&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/inclued.js"></script>
    <script>
    var count = 1;

    var forCount = 10;
    function backPage(){
      history.back(-1);
      //alert("뒤로가기");
    }
    function goPage(){
      history.go(1);
      //alert("앞으로가기");
    }
    function goHome(){
      location.href = "index.php";
      //alert("홈으로");
    }
    function rePage(){
      location.reload(true);
      //alert("새로고침");
    }
    function setPage(){
      location.href = "fontfinder://setting";
      //alert("환경설정");
    }
    $(document).ready(function(){
      if(count == 1){
        if(6<forCount && forCount <9){
          $('section').css('height','2200px');
          $('#moder').css('height','2200px');
          $('body').css('height','2200px');
        }
        else if(10<forCount && forCount <13){
          $('section').css('height','3050px');
          $('#moder').css('height','3050px');
          $('body').css('height','3050px');
        }
      }

    });


    </script>
</head>
<body>
    <div id="footer">
      <ul class="zero-size">
      <li class="icon" onclick="backPage();"id="back"><img src="img/icon_back2.png" alt="뒤로가기" id="div1"></li>
      <li class="icon" onclick="goPage();"><img src="img/icon_go2.png" alt="앞으로가기"  id="div1"></li>
      <li class="icon" onclick="goHome();" ><img src="img/icon_home2.png" alt="홈버튼" id="div1"></li>
      <li class="icon" onclick="rePage();"><img src="img/icon_re2.png" alt="새로고침" id="div1"></li>
      <li class="icon" onclick="setPage();"><img src="img/icon_otion2.png" alt="옵션" id="div1"></li>
      </ul>
      <img src="img/line1.png" alt="구분선" id="div2">
      <img src="img/line1.png" alt="구분선" id="div3">
      <img src="img/line1.png" alt="구분선" id="div4">
      <img src="img/line1.png" alt="구분선" id="div5">
      <div id=aniText>세&emsp;상&emsp;의&emsp;&emsp;모&emsp;든&emsp;폰&emsp;트&emsp;&emsp;무&emsp;료&emsp;로&emsp;&emsp;즐&emsp;기&emsp;세&emsp;요&emsp;.</div>
      <div id=aniText1>세&emsp;상&emsp;의&emsp;&emsp;모&emsp;든&emsp;폰&emsp;트&emsp;&emsp;무&emsp;료&emsp;로&emsp;&emsp;즐&emsp;기&emsp;세&emsp;요&emsp;.</div>
    </div>
    <div class="sc1">
    <header class="header1">
     <div id="mask2" onclick="offNavi()">
     </div>
       <div id="navi" onclick="onNavi()"></div>
       <div id="logo"><p style="font-weight : bold;">Google</p></div>
       <div id="header">

       <?php
           include_once "navi.php";
       ?>
       </div>
   </header>
   </div>
   <div class="sc2">
   <section>
           <?php

            include_once "googleFont.php";
          ?>
   </section>

 </div>
</body>
</html>
