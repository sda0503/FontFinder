     var scrollHeight = 0

function offNavi(){
    $('#header').animate({left : - 650});
    $('#mask2').fadeOut(1000);
    //$('html, body').removeClass('hidden');
    $("body").removeClass("layer-open"); //overflow-hidden 해제(스크롤 해제)

$('#wrap').css('top', 0);//최상위 div 고정해제
$('#wrap').css('position', 'relative');//top값 해제
$("body").scrollTop(scrollHeight); //[popupOpen()일때의 의도적 전역변수 scrollHeight값]현재 스크롤된값=보이는화면
    //alert(document.getElementsByName('email')[0].value);
}


function editEmail(){
    $("#edit1").fadeIn(1000);
    $('#mask').fadeIn(1000);
    $('#mask').fadeTo("slow",0.8);
}

function offEdit(){
     $("#edit1").fadeOut(1000);
     $('#mask').fadeOut(1000);
     //alert(document.getElementsByName('email')[0].value);
}
