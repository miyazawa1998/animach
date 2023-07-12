$(function(){ 
  const modal = $("#modal");
  const overlay = $("#overlay");
  const open = $("#modal_open");
  const close = $("#modal_close"); 
  
  open.on('click', function () { //ボタンをクリックしたら
    modal.addClass("open"); // modalクラスにopenクラス付与
    overlay.addClass("open"); // overlayクラスにopenクラス付与
  });

  close.on('click', function () { //×ボタンをクリックしたら
    modal.removeClass("open"); // modalクラスからopenクラスを外す
    overlay.removeClass("open"); // overlayクラスからopenクラスを外す
  });
});