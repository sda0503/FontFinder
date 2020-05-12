var scrollHeight = 0;

function onNavi(){
     //$('html, body').addClass('hidden');
     $('#header').animate({left : 0});
     $('#mask2').fadeIn(1000);
     $('#mask2').fadeTo("slow",0.8);
     scrollHeight = $("body").scrollTop(); // [var사용하지 않았으므로 전역스코프로 정의됨]열렸을떄 scrollTop 체크
     $("body").addClass('layer-open'); //overflow:hidden 추가
     $('#wrap').css('position', 'fixed'); //최상위 div 고정
     $('#wrap').css('top', - scrollHeight);// 최상위 div에 현재 스크롤된값 = 보이는화면만큼 top값 추가

     // $('#google').addClass('showText');
     if(count == 1){
         $('#google').addClass('showText');
         $('#naver').removeClass('showText');
         $('#bamin').removeClass('showText');
     }
     else if (count == 2){
         $('#naver').addClass('showText');
         $('#google').removeClass('showText');
         $('#bamin').removeClass('showText');
     }
     else if (count == 3){
        $('#bamin').addClass('showText');
        $('#naver').removeClass('showText');
        $('#google').removeClass('showText');
     }

}

$(document).ready(function(){

move();
setTimeout(function(){
  move1();
  setInterval(function(){
    $("#aniText1").css("right","-950px");
    move1();
  },15500);
},8000);


setInterval(function(){
  $("#aniText").css("right","-950px");
  move();
},15500);


});

function move(){
  $("#aniText").animate({right : "100%"},15000,"linear",function(){
});
}
function move1(){
  $("#aniText1").animate({right : "100%"},15000,"linear",function(){
});
}
