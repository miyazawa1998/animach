
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>検索詳細</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/auth.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<style type="text/css">
body {
  background: rgba(161, 194, 147, 0.8);
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
    width:1200px;
    font-family: serif;
    padding:20px;
    font-size:2rem;
    margin: 100px auto;
    background-color:#fff;
    position: relative;
    z-index: 2;
    opacity: 0.8;
}

.data{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-evenly;
}

.data__inner{
  width:320px;
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
      <!-- <video src="images/rabbit.mp4" autoplay loop muted playsinline width="100%"> -->
      </video>
          <div class="centerText">
            検索詳細
            <div class="data" style="margin:20px;">
              <form action="">
                <div class="data__inner">
                  <p><?php echo e($result_data->category); ?></p>
                  <img src="images/<?php echo e($result_data->img); ?>" alt="">
                  <p><?php echo e($result_data->home_data); ?></p>
                  <p><?php echo e($result_data->life_style); ?></p>
                  <p><?php echo e($result_data->friendly); ?></p>
                  <p><?php echo e($result_data->description); ?></p>
                  <p><?php echo e($result_data->point); ?></p>
                </div>
              </form>
                <a href="javascript:$('#a-post').submit()">検索結果へ戻る</a>
              <form id="a-post" action="<?php echo e(route('list')); ?>" method="post" style="display: none">
                <?php echo csrf_field(); ?>
              </form>
            </div>
                
            </div>
          </div>
    </section>
  </main>
</div>
</body>
</html>

<?php /**PATH C:\xampp\Laravel\resources\views/index/result.blade.php ENDPATH**/ ?>