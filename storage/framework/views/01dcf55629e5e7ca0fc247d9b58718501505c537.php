<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>検索</title>
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
  background-image:url(images/dog-woman.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
video {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 1;
}
p {
    font-family: serif;
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
  <?php if($user_id == 'null'): ?>
  <nav class="menubar">
  <ul>
    <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
    <li><a href="<?php echo e(url('/search')); ?>">ペット検索</a></li>
    <li><a href="<?php echo e(url('/article')); ?>">投稿一覧</a></li>
    <li class="right"><a href="<?php echo e(url('/login')); ?>">ログイン</a></li>
    <li  class="right"><a href="<?php echo e(url('/singup')); ?>">新規登録</a></li>
  </ul>
  </nav>
<?php else: ?>
  <nav class="menubar">
  <ul>
    <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
    <li><a href="<?php echo e(url('/search')); ?>">ペット検索</a></li>
    <li><a href="<?php echo e(url('/article')); ?>">投稿一覧</a></li>
    <li class="right"><a href="<?php echo e(url('/mypage')); ?>">マイページ</a></li>
    <li class="right"><a href="<?php echo e(url('/posts')); ?>">投稿する</a></li>
  </ul>
  </nav>
<?php endif; ?>


  </header>
  <main id="contents">
    <section class="first">
      <!-- <video src="images/guiniapig.mp4" autoplay loop muted playsinline width="100%"> -->
      </video>
          <div class="centerText">

              <div style="margin:20px;">
                  <form action="<?php echo e(url('/list')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                    <div>
                      <label for="name" >フリーワード</label> 
                      <div>
                        <input type="text" id="word" name="word" placeholder="犬 猫 うさぎ etc…" >
                      </div>
                    </div> 
                    <div>
                      <div>
                        <label for="family_id" >家族形態</label> 
                        <select name="family" id="family">
                          <option value="0">選択なし</option> 
                          <option value="一人暮らし">一人暮らし</option> 
                          <option value="同居(二人)">同居(二人)</option> 
                          <option value="同居(高齢者)">同居(高齢者)</option> 
                          <option value="家に常に人がいる">家に常に人がいる</option> 
                          <option value="家族がアレルギー持ち">家族がアレルギー持ち</option>
                        </select>
                      </div> 

                      <div>
                        <label for="lifestyle_id">ライフスタイル</label>
                        <select name="lifestyle" id="lifestyle">
                          <option value="0">選択なし</option> 
                          <option value="アウトドア">アウトドア</option> 
                          <option value="インドア">インドア</option>
                           <option value="休日は家にいる">休日は家にいる</option> 
                        </select>
                      </div> 
                      
                      <div >
                        <label for="friendly">なつき度</label> 
                        <select name="friendly" id="friendly">
                          <option value="0">選択なし</option> 
                          <option value="常に一緒にいたい">常に一緒にいたい</option> 
                          <option value="ほどほどに触れ合いたい">ほどほどに触れ合いたい</option> 
                          <option value="お世話だけでもいい">お世話だけでもいい</option> 
                          </select>
                      </div> 
                      <div >
                      <input type="submit" name="search" value="検索" >
                      </div>
                    </div>
                        </form>
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

<?php /**PATH C:\xampp\Laravel\resources\views/index/search.blade.php ENDPATH**/ ?>