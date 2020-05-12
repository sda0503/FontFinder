 <?php
//받은 이메일로 메일 전송하기
$to_id=htmlentities($_COOKIE["email"], ENT_QUOTES);
$to_name=htmlentities($_COOKIE["name"], ENT_QUOTES);
$from_id="tester@naver.com";
$pass="****";
$test = htmlentities($_COOKIE["selectValue"], ENT_QUOTES);
$count =htmlentities($_COOKIE["count"], ENT_QUOTES);

if($count == 1 && $test == 0){
  $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
}
else if($count == 1 && $test == 1){
  $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
}
else if($count == 1 && $test == 2){
  $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
}
else if($count == 1 && $test == 3){
  $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
}
else if($count == 1 && $test == 4){
  $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
}
else if($count == 1 && $test == 5){
  $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
}
else if($count == 1 && $test == 6){
  $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
}
else if($count == 1 && $test == 7){
  $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
}
else if($count == 1 && $test == 8){
  $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
}
else if($count == 1 && $test == 9){
  $font=array('NotoSansKR','DoHyeon','GothicA1','BlackHanSans','Sunflower','NotoSerifKR','Jua','Gugi','Dokdo', 'Gaegu');
}
else if($count == 2 && $test == 0){
  $font=array('NanumGothic','NanumMyeongjo','NanumGothicCoding','NanumPenScript','NanumBrushScript');
}
else if($count == 2 && $test == 1){
  $font=array('NanumGothic','NanumMyeongjo','NanumGothicCoding','NanumPenScript','NanumBrushScript');
}
else if($count == 2 && $test == 2){
  $font=array('NanumGothic','NanumMyeongjo','NanumGothicCoding','NanumPenScript','NanumBrushScript');
}
else if($count == 2 && $test == 3){
  $font=array('NanumGothic','NanumMyeongjo','NanumGothicCoding','NanumPenScript','NanumBrushScript');
}
else if($count == 2 && $test == 4){
  $font=array('NanumGothic','NanumMyeongjo','NanumGothicCoding','NanumPenScript','NanumBrushScript');
}
else if($count == 3 && $test == 0){
  $font=array('BMJUA','BMHANNAAir','BMKIRANGHAERANG','BMDOHYEON','BMEULJIRO','BMYEONSUNG');
}
else if($count == 3 && $test == 1){
  $font=array('BMJUA','BMHANNAAir','BMKIRANGHAERANG','BMDOHYEON','BMEULJIRO','BMYEONSUNG');
}
else if($count == 3 && $test == 2){
  $font=array('BMJUA','BMHANNAAir','BMKIRANGHAERANG','BMDOHYEON','BMEULJIRO','BMYEONSUNG');
}
else if($count == 3 && $test == 3){
  $font=array('BMJUA','BMHANNAAir','BMKIRANGHAERANG','BMDOHYEON','BMEULJIRO','BMYEONSUNG');
}
else if($count == 3 && $test == 4){
  $font=array('BMJUA','BMHANNAAir','BMKIRANGHAERANG','BMDOHYEON','BMEULJIRO','BMYEONSUNG');
}
else if($count == 3 && $test == 5){
  $font=array('BMJUA','BMHANNAAir','BMKIRANGHAERANG','BMDOHYEON','BMEULJIRO','BMYEONSUNG');
}






$title="[FontFiner] ".$font[$test]."폰트가 왔어요~!";
$article=nl2br("안녕하십니까. FontFinder 입니다.\n\n고객님께서 요청하신 ".$font[$test]."폰트가 왔습니다.\n\n저희 FontFinder를 이용해 주셔서 감사합니다. \n\n더 나은 서비스와 다양한 폰트로 보답하겠습니다.\n\n\n\n FontFinder 드림.");

require_once("class.phpmailer.php");

$smtp="smtp.naver.com";
$mail=new PHPMailer(true);
$mail->isSMTP();


try{
$mail->Host=$smtp;
$mail->SMTPAuth=true;
$mail->Port=465;
$mail->SMTPSecure="ssl";
$mail->Username=$from_id;
$mail->Password=$pass;
$mail->CharSet = "UTF-8";
$mail->SetFrom($from_id);
$mail->AddAddress($to_id);
if($count == 1 && $test == 0){
  $mail->AddAttachment("file/google/Noto_Sans_KR.zip"); //첨부파일
}
else if($count == 1 && $test == 1){
  $mail->AddAttachment("file/google/Do_Hyeon.zip");
}
else if($count == 1 && $test == 2){
  $mail->AddAttachment("file/google/Gothic_A1.zip");
}
else if($count == 1 && $test == 3){
  $mail->AddAttachment("file/google/Black_Han_Sans.zip");
}
else if($count == 1 && $test == 4){
  $mail->AddAttachment("file/google/Sunflower.zip");
}
else if($count == 1 && $test == 5){
  $mail->AddAttachment("file/google/Noto_Serif.zip");
}
else if($count == 1 && $test == 6){
  $mail->AddAttachment("file/google/Jua.zip");
}
else if($count == 1 && $test == 7){
  $mail->AddAttachment("file/google/Gugi.zip");
}
else if($count == 1 && $test == 8){
  $mail->AddAttachment("file/google/Dokdo.zip");
}
else if($count == 1 && $test == 9){
  $mail->AddAttachment("file/google/Gaegu.zip");
}
else if($count == 2 && $test == 0){
  $mail->AddAttachment("file/naver/Nanum_Gothic.zip");
}
else if($count == 2 && $test == 1){
  $mail->AddAttachment("file/naver/Nanum_Myeongjo.zip");
}
else if($count == 2 && $test == 2){
  $mail->AddAttachment("file/naver/Nanum_Gothic_Coding.zip");
}
else if($count == 2 && $test == 3){
  $mail->AddAttachment("file/naver/Nanum_Pen_Script.zip");
}
else if($count == 2 && $test == 4){
  $mail->AddAttachment("file/naver/Nanum_Brush_Script.zip");
}
else if($count == 3 && $test == 0){
  $mail->AddAttachment("file/bamin/BMJUA_ttf.zip");
}
else if($count == 3 && $test == 1){
  $mail->AddAttachment("file/bamin/BMHANNAAir_ttf.zip");
}
else if($count == 3 && $test == 2){
  $mail->AddAttachment("file/bamin/BMKIRANGHAERANG-TTF.zip");
}
else if($count == 3 && $test == 3){
  $mail->AddAttachment("file/bamin/BMDOHYEON_ttf.zip");
}
else if($count == 3 && $test == 4){
  $mail->AddAttachment("file/bamin/BMEULJIROTTF.zip");
}
else if($count == 3 && $test == 5){
  $mail->AddAttachment("file/bamin/BMYEONSUNG_ttf.zip");
}

//메일보내기
$mail->Subject=$title;
$mail->MsgHTML($article);
$mail->Send();

echo  '저희 FontFinder를 이용해 주셔서 감사합니다.';
echo  '<br>';
echo  '요청하신';
echo $font[$test];
echo  '폰트가 <br>';
echo  $to_id;
echo  '<br>';
echo "로 발송되었습니다<br> 확인 부탁드립니다.<br><br><br>";

}
//예외처리
catch (phpmailerException $e){
// echo $e->errorMessage();
echo "현재 메일 서비스가 불안정하여 중단되었습니다.<br>서비스팀에 문의해주세요.";
}
catch (Exception $e){
// echo $e->getMessage();
}




echo '<br> <button onclick="mainPage();">누르면 홈으로 이동합니다.</button>'
?>
<script>
function mainPage(){
  location.href = "index.php"
}

</script>

<style>
*{font-size: 30px;}
</style>
