<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>pet match</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
<link rel="stylesheet" href="css/top.css">
</head>

<body>

  <div id="container">
    <div id="contents">
      <header class="header">
        <div class="header__box">
          <nav class="menubar">
            <ul class="menubar__list">
              <li class="menubar__list_item"><a href="<?php echo e(url('/search')); ?>">ペット検索</a></li>
              <li class="menubar__list_item"><a href="<?php echo e(url('/article')); ?>">投稿一覧</a></li>
            </ul>
          </nav>
          <div class="header__right_box">
            <p class="menubar__list_right">
              <a href="<?php echo e(url('/login')); ?>">ログイン</a>
            </p>
            <p class="menubar__list_right">
              <a href="<?php echo e(url('/singup')); ?>">新規登録</a>
            </p>
          </div>

          <p class="top__title"><a href="<?php echo e(url('/home')); ?>">mach</a></p>
        </div>
      </header>
  <div class="content">
    <?php echo $__env->yieldContent('content'); ?>
  </div>
  <footer>
        <div class="">
          <small>Copyright&copy; <a href="index.html">SAMPLE SITE</a> All Rights Reserved.</small>
          <span class="pr">《<a href="https://template-party.com/" target="_blank">Web Design:Template-Party</a>》</span>
        </div>
      </footer>

</body>
</html><?php /**PATH C:\xampp\Laravel\resources\views/layout.blade.php ENDPATH**/ ?>