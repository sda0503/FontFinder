<?php

      $emailCookie = htmlentities($_COOKIE["email"], ENT_QUOTES);
      $nameCookie = htmlentities($_COOKIE["name"], ENT_QUOTES);
      $uuidCookie = htmlentities($_COOKIE["uuid"], ENT_QUOTES);

      $name = $_POST['name'];
      $email = $_POST['email'];
      session_start();

      $_SESSION["uuid"] = $uuidCookie;
      $_SESSION["email"] = $emailCookie;
      $_SESSION["name"] = $nameCookie;

      if(isset($_POST["uuid"])){
        $uuid = $_POST["uuid"];
        $_SESSION["uuid"] = $_POST["uuid"];
        $email =   $_SESSION["email"];
        $name = $_SESSION["name"];
      }
      else{
        $uuid = $_SESSION["uuid"];
        $email =   $_SESSION["email"];
        $name = $_SESSION["name"];
      }
        include_once "insertUuid.php";

    $font=array('NanumGothic','NanumMyeongjo','NanumGothicCoding','NanumPenScript','NanumBrushScript');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FontSite</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script|Nanum+Gothic|Nanum+Gothic+Coding|Nanum+Myeongjo|Nanum+Pen+Script&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/inclued.js"></script>
    <script>

    var count = 2;
    var forCount = 5;
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
      if (count == 2) {
       if(4<forCount && forCount <7){
         $('section').css('height','1700px');
         $('#moder1').css('height','1700px');
         $('body').css('height','1700px');
       }
       else if(6<forCount && forCount <9){
         $('section').css('height','2200px');
         $('#moder1').css('height','2200px');
         $('body').css('height','2200px');
       }
      }

    });
    </script>
</head>
<body>
  <div id="footer">
    <ul class="zero-size">
      <li class="icon" onclick="backPage();"><img src="img/icon_back2.png" alt="뒤로가기" id="div1" onclick="backPage();"></li>
      <li class="icon" onclick="goPage();"><img src="img/icon_go2.png" alt="앞으로가기"  id="div1" onclick="backPage();"></li>
      <li class="icon" onclick="goHome();" ><img src="img/icon_home2.png" alt="홈버튼" id="div1" onclick="backPage();"></li>
      <li class="icon" onclick="rePage();"><img src="img/icon_re2.png" alt="새로고침" id="div1" onclick="backPage();"></li>
      <li class="icon" onclick="setPage();"><img src="img/icon_otion2.png" alt="옵션" id="div1" onclick="backPage();"></li>
    </ul>
    <img src="img/line1.png" alt="구분선" id="div2">
    <img src="img/line1.png" alt="구분선" id="div3">
    <img src="img/line1.png" alt="구분선" id="div4">
    <img src="img/line1.png" alt="구분선" id="div5">
    <div id=aniText>세&emsp;상&emsp;의&emsp;&emsp;모&emsp;든&emsp;폰&emsp;트&emsp;&emsp;무&emsp;료&emsp;로&emsp;&emsp;즐&emsp;기&emsp;세&emsp;요&emsp;.</div>
    <div id=aniText1>세&emsp;상&emsp;의&emsp;&emsp;모&emsp;든&emsp;폰&emsp;트&emsp;&emsp;무&emsp;료&emsp;로&emsp;&emsp;즐&emsp;기&emsp;세&emsp;요&emsp;.</div>
  </div>
   <header class="header1">
       <div id="mask2" onclick="offNavi()">
       </div>
       <div id="navi" onclick="onNavi()"></div>
       <div id="logo"><p style="font-weight : bold;">NAVER</p></div>
       <div id="header">
       <?php

           include_once "navi.php";
       ?>
       </div>
   </header>
   <section>
       <div id="mother1">
           <?php

                $forCount =5;
                for($i =0; $i<$forCount; $i++)
                 {
                     echo '<div id="no1"> <div class="text" id="'.$font[$i].'">
                         <h1 id="'.$font[$i].'" style="margin-bottom: 20px;">'.$font[$i].'</h1>
                         가나다라마바사<br>ABCDEFGHIJK<br>0123456789
                         </div><button id="'.$font[$i].' textSize1" onclick="sendMailBtn('.$i.');" class="button2" style="width: 100%;">폰트 메일로 보내기</button></div>';
                 }
            ?>
       </div>
   </section>
   <div id="eidt"></div>
</body>
</html>
<script>
function sendMailBtn(selectValue){
    document.cookie = "count=" + count + ";";
    document.cookie = "selectValue=" + selectValue + ";";
    location.href = "sendEmail.php"
  }
</script>
