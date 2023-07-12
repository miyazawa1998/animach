
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>マイページ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="css/style.css">
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

.box__container{
  margin:0 auto;
}

.box__inner{
  width:900px;
  margin:0 auto;

}

.tab-area {
    display: flex;
    flex-direction: row;
    cursor: pointer;
    padding-inline-start: 0;
    -webkit-tap-highlight-color: transparent;
    }

  .tab {
    margin:0 auto;
    width: calc(100%/4);
    border-left: 1px solid #333;
    text-align: center;
    list-style: none;
    border: 1px solid #333;
    border-right: none;
  }

  .tab:hover {
      color: #e5e5e5;
      background: #333;
      transition:  0.6s;
    }

  .tab.active {
    background-color: #333;
    color: #fff;
  }

  .tab:nth-child(2) {
    border: 1px solid #333;
    border-right: none;
  }

  .tab:last-child{
      border-right: 1px solid #333;
    }

  .panel {
    display: none;
    padding: 20px;
  }

  .panel.active {
    display: block;
  }

/* 共通 */
.changeCard{
  width: 900px;
    margin: 0 auto;
}

.changeCard ul {
    padding: 0;
    list-style: none;
    border: none;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 0;
    margin-top: 20px;
}
.changeItemTxt {
    width: 62%;
}
.changeItemTxt p.itemTitle {
    font-size: 1.1rem;
    line-height: 1.56;
    margin: 0;
    font-weight: bold;
    color: #313131;
    margin-bottom: 10px;
}
.changeItemTxt ul.itemTag {
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
}
.changeItemTxt ul.itemTag li {
    background: #f1f1f1;
    color: #707070;
    font-size: 0.7rem;
    padding: 2px 10px;
    position: relative;
}
.changeItemTxt ul.itemTag li:before {
    padding-right: 3px;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 1em;
    content: "\f02b";
    vertical-align: baseline;
    color: #aaa;
}
p.itemCat {
    position: absolute;
    left: 22px;
    top: 22px;
    background: #6bb6ff;
    color: #FFF;
    border-radius: 9999px;
    font-size: 0.7rem;
    display: inline-block;
    padding: 1px 12px 0px;
    z-index: 2;
}
/* 共通ここまで */

/* 水平のカード */
li.changeItem.gridVertical {
    margin-bottom: 15px;
}
.listdesign {
    border: none;
    border-radius: 2px;
    background: #fff;
    box-shadow: 0 0 3px 0 rgb(0 0 0 / 12%), 0 2px 3px 0 rgb(0 0 0 / 22%);
    cursor: pointer;
    transition: 0.2s ease-in-out;
    padding: 0;
    padding-right: 20px;
    display: flex;
    flex-direction: row;
    text-decoration: none;
    align-items: center;
     position: relative;
     height: 350px;
     width: 80%;
    margin: 0 auto;
}
.listdesign {
    box-shadow: 0 15px 30px -5px rgb(0 0 0 / 15%), 0 0 5px rgb(0 0 0 / 10%);
    transform: translateY(-4px);
}
.listdesign {
    top: 10px;
    left: 10px;
}
.listdesign img {
  width: 40%;
    border-radius: 2px 0 0 2px;
    margin-right: 3%;
    margin-left: 3%;
}
.listdesign .changeItemTxt {
    width: 53%;
}
@media screen and (max-width: 767px) {
/* （ここにモバイル用スタイルを記述） */
li.changeItem.gridVertical {
    margin-bottom: 10px;
    width: 100%;
}
li.changeItem.gridVertical a {
    padding: 8px;
}
li.changeItem.gridVertical a .itemCat, li.changeItem.gridVertical a .changeItemTxt time, li.changeItem.gridVertical a .changeItemTxt .itemTag {
    display: none;
}
li.changeItem.gridVertical a img {
    width: 90px;
    height: 90px;
    object-fit: cover;
    margin-right: 10px;
}
li.changeItem.gridVertical a .changeItemTxt {
    width: calc(100% - 100px);
    margin: 0;
}
li.changeItem.gridVertical a .changeItemTxt .itemTitle {
    font-size: 1rem;
    margin: 0;
}
}

.time{
  margin-bottom: 0;
  text-align: left;
}

.itemTitle{
  text-align: left;
  margin-left:30px;
}

.itemTag li{
  margin-top:10px;
  margin-left:30px;
}

.mb-5{
  margin-top: 50px;
  font-size: 35px;
  color: #fff;
  text-shadow: 5px 4px 3px #000;
}

#nice_btn{
  width:30px;
}
.btn{
  display: flex;
  margin-top: 20px;
  justify-content: end;
}
</style>
</head>
<script>
$(function(){
    let tabs = $(".tab"); 
    $(".tab").on("click", function() { 
      $(".active").removeClass("active");
      $(this).addClass("active"); 
      const index = tabs.index(this); 
      $(".panel").removeClass("active").eq(index).addClass("active");
    });
  });
</script>
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
    <div class="changeCard">
      <div>
        <div>
          <a href="<?php echo e(url('/account')); ?>"><?php echo e($user->name); ?></a>
        </div>
        <div>
          <a href="">フォロー</a>
          <a href="">フォロワー</a>
        </div>
      </div>
      <ul class="tab-area">
        <li class="tab active">投稿</li>
        <li class="tab">いいね</li>
        <li class="tab">フォロー</li>
        <li class="tab">フォロワー</li>
      </ul>
      <div class="panel-area">
        <!-- 自分の投稿一覧 -->
        <div class="panel active">
          <ul>
            <?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="?" id="home_form">
            <?php echo csrf_field(); ?>
              <li class="changeItem gridVertical">
                <div class="listdesign">
                  <img src="images/pig.jpg" alt="SNSの流入を増やすOGP設定のスニペット3種">

                    <div class="changeItemTxt"> 
                      <p class="time"><?php echo e($art->created_at); ?></p>
                      <input type="hidden" name="article_id" value="<?php echo e($art->id); ?>" >
                      <input type="hidden" name="user_name" value="<?php echo e($art->user_name); ?>" >
                      <h2 class="itemTitle"><?php echo e($art->user_name); ?></h2>
                      <ul class="itemTag">
                        <li><?php echo e($art->category); ?></li>
                        <li><?php echo e($art->comment); ?></li>
                      </ul>
                      <div class="btn">
                        <img src='images/nicebutton.png' id="nice_btn">
                        <input type="submit" name="like" value="いいね" formmethod="post" formaction="<?php echo e(url('/like')); ?>">
                      </div>
                      <input type="submit" name="detail" value="詳細を見る" formmethod="get" formaction="<?php echo e(url('/detail')); ?>">
                    </div>
                </div>
              </li>
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <!-- いいね一覧 -->
        <div class="panel">
        <ul>
          <?php $__currentLoopData = $likes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $like): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="?" id="home_form">
            <?php echo csrf_field(); ?>
              <li class="changeItem gridVertical">
                <div class="listdesign">
                  <img src="images/pig.jpg" alt="SNSの流入を増やすOGP設定のスニペット3種">

                    <div class="changeItemTxt"> 
                    <p class="time"><?php echo e($like->created_at); ?></p>
                      <input type="hidden" name="article_id" value="<?php echo e($like->id); ?>" >
                      <input type="hidden" name="user_name" value="<?php echo e($like->user_name); ?>" >
                      <h2 class="itemTitle"><?php echo e($like->user_name); ?></h2>
                      <ul class="itemTag">
                      <li><?php echo e($like->category); ?></li>
                        <li><?php echo e($like->comment); ?></li>
                      </ul>
                      <div class="btn">
                        <img src='images/nicebutton.png' id="nice_btn">
                        <input type="submit" name="like" value="いいね" formmethod="post" formaction="<?php echo e(url('/like')); ?>">
                      </div>
                      <input type="submit" name="detail" value="詳細を見る" formmethod="get" formaction="<?php echo e(url('/detail')); ?>">
                    </div>
                </div>
              </li>
            </form>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <!-- フォロー一覧 -->
        <div class="panel">
        <ul>
          <li class="changeItem gridVertical">
          <?php $__currentLoopData = $follows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <form action="?">
            <div>
              <div><?php echo e($fo->name); ?></div>
              <input type="submit" name="follow" value="フォロー中" formmethod="get" formaction="<?php echo e(route('unfollow', ['id'=>$fo->id])); ?>">
              <input type="hidden" name="follow_id" value="<?php echo e($fo->id); ?>" >
              <input type="hidden" name="follow_name" value="<?php echo e($fo->name); ?>" >
            </div>
          </form>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </li>
          </ul>
        </div>
      </div>
      <!-- フォロワー一覧 -->
      <div class="panel">
        <ul>
          <li class="changeItem gridVertical">
          <?php $__currentLoopData = $followers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <form action="?">
            <div>
            
              <div><?php echo e($fo->name); ?></div>
              <input type="submit" name="follow" value="フォローする" formmethod="get" formaction="<?php echo e(route('follow', ['id'=>$fo->id])); ?>">
              <input type="hidden" name="follow_id" value="<?php echo e($fo->id); ?>" >
              <input type="hidden" name="follow_name" value="<?php echo e($fo->name); ?>" >
            </div>
          </form>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </li>
          </ul>
        </div>
      </div>
      </div>
      
  </div>
  </section>
  </main>
</div>
</body>
</html>

<?php /**PATH C:\xampp\Laravel\resources\views/index/mypage.blade.php ENDPATH**/ ?>