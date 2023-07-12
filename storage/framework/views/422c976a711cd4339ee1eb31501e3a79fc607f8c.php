<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>アカウント編集</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/auth.css">
<style type="text/css">
body {
  background: #000;
}
video {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 1;
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
      <video src="images/rabbit.mp4" autoplay loop muted playsinline width="100%">
      </video>
          <div class="centerText">
          Sing Up
              <div style="margin:20px;">
              <div >
              <?php if($errors->has('name')): ?>
                <p class="alert"><?php echo e($errors->first('name')); ?></p>
              <?php endif; ?>
              <?php if($errors->has('email')): ?>
                <p class="alert"><?php echo e($errors->first('email')); ?></p>
              <?php endif; ?>
              <?php if($errors->has('password')): ?>
                <p class="alert"><?php echo e($errors->first('password')); ?></p>
              <?php endif; ?>
                <form name="" action="<?php echo e(url('/edite')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                    <div >
                    ニックネーム、メールアドレス、パスワードをご確認の上、</br>
                    「編集」ボタンをクリックしてください。
                    </div>
                    <div >
                    
                    <input class="txt" type="text" id="user_name" name="name"  value="<?php echo e($users->name); ?>" placeholder="UserName">
                    <input class="txt" type="id" id="user_id" name="email" value="<?php echo e($users->email); ?>"placeholder="UserID">
                    <input class="txt" type="password" id="password"  name="password" value="<?php echo e($users->password); ?>" placeholder="Password">

                    </div>
                    <button  id="submit_btn" type="submit">編集</button>
                  
                  <a  href="<?php echo e(url('/mypage')); ?>">マイページへ戻る</a>
                </form>
            </div>
              </div>
          </div>
    </section>
  </main>
</div>
</body>
</html>

<?php /**PATH C:\xampp\Laravel\resources\views/index/account.blade.php ENDPATH**/ ?>