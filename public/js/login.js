$(function(){
    $('#login_btn').click(function(){
      if($('#user_id').val() === "") {
        $('.errMail').text("メールアドレスは必須項目です。");//エラーメッセージ表示
        } else {                                           //入力されている場合
            $('.errMail').text("");                         //エラーメッセージなし
        }

      if($('#password').val() === "") {
        $('.errPassword').text("パスワードは必須項目です。");//エラーメッセージ表示
        } else {                                           //入力されている場合
            $('.errPassword').text("");                    //エラーメッセージなし
        }

      $.ajaxSetup({
        headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
          }
      });
      $.ajax({
        url     :   'ajax',
        type    :   'post',
        data: {
              // パラメーターを設定
              user_id: $('#user_id').val(),
              password: $('#password').val()
        }     //formで送信している内容を送る
    })
    .done((res) => {
        if(res.id){
                location.href = "https://animach.net/?id="+res.id;
            }
            if(!res){
                alert('登録されていません');
            }
          })
          .fail(function(){
        alert('エラー');
        　　console.log("XMLHttpRequest : " + XMLHttpRequest.status);
        　　console.log("textStatus     : " + textStatus);
        　　console.log("errorThrown    : " + errorThrown.message);
            location.href = "login";
      });
    });
  });