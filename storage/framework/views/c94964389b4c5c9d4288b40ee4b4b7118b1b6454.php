<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>sigun up</title>
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
  background-image:url(images/cat.jpg);
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
      <!-- <video src="images/rabbit.mp4" autoplay loop muted playsinline width="100%">
      </video> -->
          <div class="centerText">
          Sing Up
              <div style="margin:20px;">
              <div >
                <form name="login_form" action="<?php echo e(url('/store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                    <div >
                    ニックネーム、メールアドレス、パスワードをご入力の上、</br>
                    「登録」ボタンをクリックしてください。
                    </div>
                    <div >
                      <?php if($errors->has('name')): ?>
                        <input class="txt" type="text" id="user_name" name="name"  value="<?php echo e(old('name')); ?>" placeholder="UserName">
                        <span class="errmes"><?php echo e($errors->first('name')); ?></span>
                      <?php else: ?>
                        <input class="txt" type="text" id="user_name" name="name"  value="<?php echo e(old('name')); ?>" placeholder="UserName">
                      <?php endif; ?>
                      <?php if($errors->has('email')): ?>
                        <input class="txt" type="id" id="user_id" name="email" value="<?php echo e(old('email')); ?>"placeholder="UserID">
                        <span class="errmes"><?php echo e($errors->first('email')); ?></span>
                      <?php else: ?>
                        <input class="txt" type="id" id="user_id" name="email" value="<?php echo e(old('email')); ?>"placeholder="UserID">
                      <?php endif; ?>
                      <?php if($errors->has('password')): ?>
                        <input class="txt" type="password" id="password"  name="password" value="<?php echo e(old('password')); ?>" placeholder="Password">
                        <span class="errmes"><?php echo e($errors->first('password')); ?></span>
                      <?php else: ?>
                        <input class="txt" type="password" id="password"  name="password" value="<?php echo e(old('password')); ?>" placeholder="Password">
                      <?php endif; ?>
                    </div>
                    <button  id="submit_btn" type="submit">登録</button>
                  <a  href="login">ログイン画面へ戻る</a>
                </form>
            </div>
              </div>
          </div>
    </section>
  </main>
</div>
</body>
</html>

<?php /**PATH C:\xampp\Laravel\resources\views/index/singup.blade.php ENDPATH**/ ?>