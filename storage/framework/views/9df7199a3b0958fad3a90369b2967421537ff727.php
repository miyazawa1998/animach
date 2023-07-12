
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>投稿編集</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/auth.css">
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
            編集
            <div class="data" style="margin:20px;">
                <form action="?" id="home_form" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="">
                    <div class="">
                      <div class="">
                        <p class="">
                          <img>
                        </p> 
                      </div> 
                      <div class="">
                        <div class="">
                          <label for="name" class="">名前</label> 
                          <div class="">
                          <input type="hidden" name="article_id" value="<?php echo e($post_detail->id); ?>" >
                          <input type="hidden" name="user_name" value="<?php echo e($post_detail->id); ?>">
                          <p><?php echo e($post_detail['user_name']); ?></p>
                          </div>
                        </div> 
                        <div class="">
                          <label for="base" class="">動物の種類</label> 
                          <div class="">
                            <input type="text" name="post_category" id="base" placeholder="犬、猫など" value="<?php echo e($post_detail->category); ?>" class="" required="required">
                          </div>
                        </div> 
                        <div class="">
                          <label for="taste" class="">家の情報</label> 
                          <div class="">
                            <input type="text" name="post_home_data" id="taste" placeholder="一人暮らし、同居(二人)など" value="<?php echo e($post_detail->home_data); ?>" class="" required="required">
                          </div>
                        </div> 
                        <div class="">
                          <label for="feature" class="">ライフスタイル</label> 
                          <div class="col-10">
                            <textarea name="post_life_style" rows="3" id="feature" placeholder="インドア、出張が多いなど" class=""><?php echo e($post_detail->life_style); ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class=""><label for="friendly" class="">なつき度</label> 
                      <div class="">
                        <textarea name="post_friendly" rows="3" id="friendly" placeholder="" maxlength="300" class=""><?php echo e($post_detail->friendly); ?></textarea>
                      </div>
                    </div> 
                    <div class=""><label for="comment" class="">コメント(500文字以内)</label> 
                      <div class="">
                        <textarea name="post_comment" rows="5" id="comment" placeholder="" maxlength="500" class=""><?php echo e($post_detail->comment); ?></textarea>
                      </div>
                    </div>
                  </div> 
                  <div class="">
                    <input type="submit" name="update" value="更新" formmethod="post" formaction="<?php echo e(url('/update')); ?>">
                    <input type="submit" name="delite" value="削除" formmethod="post" formaction="<?php echo e(url('/delite')); ?>">
                  </div>
                </form>
            </div>
          </div>
    </section>
  </main>
</div>
</body>
</html>

<?php /**PATH C:\xampp\Laravel\resources\views/index/editing.blade.php ENDPATH**/ ?>