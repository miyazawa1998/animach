<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/auth.css">
<style type="text/css">
html,body{
  overflow:hidden;
}

body {
  background-image:url(images/guinea-pig.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  width:100%;
  height:100%;
}
video {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 1;
}
p {
    font-family: serif;
    color: #fff;
    font-size: 400%;
    margin:20px;
    text-align:center;
    position: relative;
    z-index: 2;
}
.divText {
    text-align:center;
    position: relative;
    z-index: 2;
}
.centerText {
    text-align:center;
    width:80%;
    font-family: serif;
    padding:20px;
    font-size:2rem;
    margin: 350px auto;
    background-color:#fff;
    position: relative;
    z-index: 2;
    opacity: 0.8;
}
</style>
</head>

<body>
<div id="container">
  <header>

  <h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="SAMPLE SITE"></a></h1>

  <!--PC用（801px以上端末）メニュー-->
  <nav class="menubar">
  <ul>
  <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
  <li><a href="<?php echo e(url('/search')); ?>">ペット検索</a></li>
  <li><a href="<?php echo e(url('/posts')); ?>">投稿一覧</a></li>
  </ul>
  </nav>


  </header>
  <main id="contents">
    <section class="first">
      <!-- <video src="images/cat.mp4" autoplay loop muted playsinline width="100%">
      </video> -->
          <div class="centerText">
             login

              <div style="margin:20px;">
              <div >
                <form  name="login_form">
                <?php echo csrf_field(); ?>
                <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                    <div >
                    UserID、Passwordをご入力の上、</br>
                        「LOGIN」ボタンをクリックしてください。
                    </div>
                    <div >
                    <input type="id" name="user_id" placeholder="UserID" id="user_id"><span class="errMail errmes"></span>
                    <input type="password" name="password" placeholder="Password" id="password"><span class="errPassword errmes"></span>
                    <input type="button" name="botton" value="LOGIN" id="login_btn">
                    </div>
                    <a href="<?php echo e(url('/singup')); ?>">account create</a>
                </form>
            </div>
              </div>
          </div>
    </section>
  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
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
                  location.href = "home?id="+res.id;
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
  </script>
</div>
</body>
</html>

<?php /**PATH C:\xampp\Laravel\resources\views/index/login.blade.php ENDPATH**/ ?>