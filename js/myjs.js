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
  $("#nowBtn").click(function() {
    $(".typeBtn").removeClass("typeBtnactive");
    $(this).addClass("typeBtnactive");
    $("#comingMovie").hide();
    $("#nowMovie").show();
  })
  $("#comingBtn").click(function() {
    $(".typeBtn").removeClass("typeBtnactive");
    $(this).addClass("typeBtnactive");
    $("#nowMovie").hide();
    $("#comingMovie").show();
  })
  
  $("#orderBtn").click(function() {
    $("#orderCover").fadeIn();
  })
  $("#loginBtn").click(function() {
    $("#loginCover").fadeIn();
  })
  $(".close,.modalbg").click(function() {
    $("#orderCover,#loginCover").fadeOut();
  })

  var webaddr="http://192.168.64.2/cinema/index.php";
    switch (location.href) {
      case webaddr:
        $("#navMenu .nav-link").eq(0).addClass("active");
        break;
      case webaddr+"?do=order":
        $("#navMenu .nav-link").eq(1).addClass("active");
        break;
      case webaddr+"?do=reg":
        $("#navMenu .nav-link").eq(2).addClass("active");
        break;
    }
    // backend
  $("#addbtn").click(function () {
    $("#addModal").fadeIn();
  });
  $(".addModal").click(function () {
    $("#addModal").fadeOut();
  });
  $(".backbtn").click(function () {
    $("#addModal").fadeOut();
  });
  $(".backbtn").click(function () {
    $("#addModal").fadeOut();
  });
  $(".chgModal").click(function () {
    $("#chgModal").fadeOut();
  });
  })

  
  function op(x,y,url){
    $(x).fadeIn()
    if(y)
    $(y).fadeIn()
    if(y&&url)
    $(y).load(url)
  }
  function del(table,id){
    let yes=confirm('確定刪除嗎？');
    if(yes){
      $.post('api/del.php',{table,id},function(){
        location.reload();
      })
    }
  }