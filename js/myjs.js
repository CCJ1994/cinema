$(document).ready(function(){
  function bgmenu(){//判斷如果scroll是否在section#meslider內來決定是否提供bg-dark
    const 
    nowat=$(document).scrollTop(),
    height=$("#bannerSlider").innerHeight(),
    offset=$("#navMenu").innerHeight(),
    screenW=$(document).innerWidth();

    if(screenW>=992){

      if(nowat<height-offset){
        $("#navMenu").removeClass("bg-dark");
      }else{
        $("#navMenu").addClass("bg-dark");
      }
    }else{
      $("#navMenu").addClass("bg-dark");
    }

  }

  $(document).scroll(function(){//對document進行滾動
    bgmenu();
  });
  $(window).resize(bgmenu); //對window重新調整尺寸時
  bgmenu();

  
})