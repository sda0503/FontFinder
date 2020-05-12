<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>googleFont</title>


  </head>
  <body>
    <div id="mother">
        <?php
        $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
        $font1=array('Noto%20Sans%20KR','Do Hyeon','Gothic A1','Black Han Sans','Sun flower','Noto Serif KR','Jua','Gugi','Dokdo', 'Gaegu');
            $forCount = 10;

            for($i =0; $i<$forCount; $i++)
             {
                 echo '<div id="no1"> <div class="text" id="'.$font[$i].'">
                     <h1 id="'.$font[$i].'" style="margin-bottom: 20px;">'.$font[$i].'</h1>
                     가나다라마바사<br>ABCDEFGHIJK<br>0123456789

                     </div><button id="'.$font[$i].' textSize1" onclick="sendMailBtn('.$i.');" class="button2" style="width: 100%;">폰트 메일로 보내기</button></div>';
             }
         ?>
    </div>
  </body>
</html>
<script>
//버튼 클릭시 메일 보내는 스크립트
function sendMailBtn(selectValue){
    document.cookie = "count=" + count + ";";
    document.cookie = "selectValue=" + selectValue + ";";
    location.href = "sendEmail.php"

  }
</script>
