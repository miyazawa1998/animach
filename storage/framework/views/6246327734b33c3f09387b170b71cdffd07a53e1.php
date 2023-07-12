
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>新規投稿</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/auth.css">
<style type="text/css">
body {
  background-image:url(images/flowers.jpg);
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
  <li><a href="<?php echo e(url('/article')); ?>">投稿一覧</a></li>
  <li class="right"><a href="#<?php echo e(url('/login')); ?>">ログイン</a></li>
  <li  class="right"><a href="<?php echo e(url('/singup')); ?>">新規登録</a></li>
  </ul>
  </nav>


  </header>
  <main id="contents">
    <section class="first">
      <!-- <video src="images/rabbit.mp4" autoplay loop muted playsinline width="100%"> -->
      </video>
          <div class="centerText">
            投稿する
            <div class="data" style="margin:20px;">
                <form method="POST" action="<?php echo e(url('/create')); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="">
                    <div class="">
                      <div class="">
                        <p class="">
                          <img>
                        </p> 
                        <input type="file" id="image" name="image">
                      </div> 
                      <div class="">
                        <div class="">
                          <label for="name" class="">名前</label> 
                          <div class="">
                          <input type="hidden" name="user_name" value="<?php echo e($users->name); ?>">
                          <p><?php echo e($users->name); ?></p>
                          </div>
                        </div> 
                        <div class="">
                          <label for="base" class="">動物の種類</label> 
                          <div class="">
                            <input type="text" name="post_category" id="base" placeholder="犬、猫など" value="" class="" required="required">
                          </div>
                        </div> 
                        <div class="">
                          <label for="taste" class="">家の情報</label> 
                          <div class="">
                            <input type="text" name="post_home_data" id="taste" placeholder="一人暮らし、同居(二人)など" value="" class="" required="required">
                          </div>
                        </div> 
                        <div class="">
                          <label for="feature" class="">ライフスタイル</label> 
                          <div class="col-10">
                            <textarea name="post_life_style" rows="3" id="feature" placeholder="インドア、出張が多いなど" class=""></textarea>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class=""><label for="material" class="">なつき度</label> 
                      <div class="">
                        <textarea name="post_friendly" rows="3" id="material" placeholder="" maxlength="300" class=""></textarea>
                      </div>
                    </div> 
                    <div class=""><label for="comment" class="">コメント(500文字以内)</label> 
                      <div class="">
                        <textarea name="post_comment" rows="5" id="comment" placeholder="" maxlength="500" class=""></textarea>
                      </div>
                    </div>
                  </div> 
                  <div class="">
                    <input id="primary_btn" type="submit" value="投稿する" />
                  </div>
                </form>
            </div>
          </div>
    </section>
  </main>
</div>
</body>
</html>

<?php /**PATH C:\xampp\Laravel\resources\views/index/posts.blade.php ENDPATH**/ ?>