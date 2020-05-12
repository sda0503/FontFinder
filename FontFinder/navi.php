<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>navigation</title>

    <link rel="stylesheet" href="css/navi.css">
    <script src="js/jquery-1.12.3.js"></script>
    <script src="js/main.js"></script>
    <script>

      function google(){
        $('#mask2').css("display","none");
            offNavi();
            location.href = "index.php";
      }
      function naver(){
        $('#mask2').css("display","none");
              offNavi();
            location.href = "naverFont.php";
      }
      function bamin(){
        $('#mask2').css("display","none");
              offNavi();
            location.href = "baminFont.php";
      }
      var setCookie = function(name,value){
        document.cookie = name + '=' + value + ';';
      }

      function submitForm(){

        if(count == 1){
         document.cookie = "name=" + document.getElementsByName('name')[0].value + ";";
         document.cookie = "email=" + document.getElementsByName('email')[0].value + ";";

         //ios로 데이터 전송

         var passdata = new Object();
         passdata.name = document.getElementsByName('name')[0].value;
         passdata.email = document.getElementsByName('email')[0].value;
         var sJson = JSON.stringify(passdata);
         window.webkit.messageHandlers.sendEmailName.postMessage(sJson);

         document.comment_form.action = "index.php";
         document.comment_form.submit();

        }
        else if(count ==2){
          document.cookie = "name=" + document.getElementsByName('name')[0].value + ";";
          document.cookie = "email=" + document.getElementsByName('email')[0].value + ";";

          //ios로 데이터 전송
          var passdata = new Object();
          passdata.name = document.getElementsByName('name')[0].value;
          passdata.email = document.getElementsByName('email')[0].value;
          var sJson = JSON.stringify(passdata);
          window.webkit.messageHandlers.sendEmailName.postMessage(sJson);

          document.comment_form.action = "naverFont.php";
          document.comment_form.submit();

        }
        else {
          document.cookie = "name=" + document.getElementsByName('name')[0].value + ";";
          document.cookie = "email=" + document.getElementsByName('email')[0].value + ";";

          //ios로 데이터 전송
          var passdata = new Object();
          passdata.name = document.getElementsByName('name')[0].value;
          passdata.email = document.getElementsByName('email')[0].value;
          var sJson = JSON.stringify(passdata);
          window.webkit.messageHandlers.sendEmailName.postMessage(sJson);

          document.comment_form.action = "baminFont.php";
          document.comment_form.submit();
        }
      }

      function logOut(){
          location.href = "fontfinder://logout";
      }


    </script>
</head>
<body>
    <div id="navi1">
        <div class="navi1">
          <div class="userId">
            <img src="img/10.png" alt="아이콘">
            <div id="ID">
                <div class="userName">
                  <span style="font-weight : bold;   font-size: 2rem;"><?php echo $nameCookie; ?></span>
                </div>
                <div class="userEmail">
                    <span style="font-weight : bold;   font-size: 1rem;"><?php echo $emailCookie; ?></span>
                </div>
            </div>
          </div>
            <div class="flexIcon">
              <button onclick="logOut()" id="edit2" class="button3">LOGOUT</button>
              <button onclick="editEmail()" id="edit2" class="button3">MODIFY</button>
              <button onclick="offNavi()" id="close" class="button3">CLOSE</button>
            </div>
        </div>
        <ul>
            <li id="google" onclick="google()">Google</li>
            <li id="naver" onclick="naver()">NAVER</li>
            <li id="bamin" onclick="bamin()">배달<span style="font-size: 2.66rem;">의</span>민족</li>
        </ul>

    </div>
    <div id="edit1">
        <div id="mask" onclick="offEdit()"> </div>
      <div class="wrap">
        <div class="head1">MODIFY</div>
        <form name="comment_form" method="post">
          <div class="head">
            <div class="cont">
              <p>Name</p>
              <input type="text" name="name" value=""  id="emailText">
            </div>
            <button type="submit"class="button1" value="제출" id="submit" onclick="submitForm()">저장</button>
          </div>
          <div class="head">
            <div class="cont">
              <p>Email</p>
              <input type="text" name="email" value="" id="emailText">
            </div>
          </div>
          </form>
          <button onclick="offEdit()" class="button1" id="esc">취소</button>
        </div>
      </div>
    </div>


</body>
</html>
