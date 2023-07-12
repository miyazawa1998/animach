
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>投稿詳細</title>
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
  margin-left: 20px;
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
     height: 500px;
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

.edite_btn{
  text-align: end;
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
    <div class="changeCard">
    <h1 class="mb-5">投稿詳細</h1>
     <ul>
     <form action="?" id="home_form">
      <?php echo csrf_field(); ?>
      <li class="changeItem gridVertical">
        <div class="listdesign">
          <img src="images/pig.jpg" alt="SNSの流入を増やすOGP設定のスニペット3種">

            <div class="changeItemTxt"> 
              <p class="time"><?php echo e($post_detail->created_at); ?></p>
              <?php if($post_detail->user_id == $user_id): ?>
              <div class="edite_btn">
                <input type="submit" name="edite" value="投稿編集" formmethod="get" formaction="<?php echo e(url('/editing')); ?>">
              </div>
              <?php endif; ?>
              <!-- <time class="pubdate sng-link-time dfont" itemprop="datePublished" datetime="2021年3月16日">2021年3月16日</time> -->
              <input type="hidden" name="article_id" value="<?php echo e($post_detail->id); ?>" >
              <input type="hidden" name="user_name" value="<?php echo e($post_detail->user_name); ?>" >
              <h2 class="itemTitle"><?php echo e($post_detail->user_name); ?></h2>
              <label>
              <p>
                <label>種類 : </label>
                <?php echo e($post_detail->category); ?>

              </p>
              <input type="hidden" name="category" value="<?php echo e($post_detail->category); ?>" >
              <p>
                <label>お家情報 : </label>
                <?php echo e($post_detail->home_data); ?>

              </p>
              <input type="hidden" name="home_data" value="<?php echo e($post_detail->home_data); ?>" >
              <p>
                <label>ライフスタイル : </label>
                <?php echo e($post_detail->life_style); ?>

              </p>
              <input type="hidden" name="life_style" value="<?php echo e($post_detail->life_style); ?>" >
              <p>
                <label>なつき度 : </label>
                <?php echo e($post_detail->friendly); ?>

              </p>
              <input type="hidden" name="friendly" value="<?php echo e($post_detail->friendly); ?>" >
              <p>
                <label>コメント : </label>
                <?php echo e($post_detail->comment); ?>

              </p>
              <input type="hidden" name="comment" value="<?php echo e($post_detail->comment); ?>" >
              <div class="btn">
                <form method="get">
                  <?php echo csrf_field(); ?>
                    <?php if($like): ?>
                    <input type="image" name="btn_confirm" src="images/nicebutton.png"  alt="いいね解除" value="いいね解除" formmethod="get" formaction="<?php echo e(route('unlike', ['id'=>$post_detail->id])); ?>">
                    <p>
                      いいね
                      <span class="badge">
                      <?php echo e($counts); ?>

                      </span>
                    </p>
                    <?php else: ?>
                    <input type="image" name="btn_confirm" src="images/notnicebutton.png"  alt="いいね" value="いいね" formmethod="get" formaction="<?php echo e(route('like', ['id'=>$post_detail->id])); ?>">
                    <p>
                      いいね
                      <span class="badge">
                      <?php echo e($counts); ?>

                      </span>
                    </p>
                    <?php endif; ?>
                  </form>    
                </div>
            </div>
        </div>
      </li>
      </form>
    </ul>
  </div>
  </section>
  </main>
</div>
</body>
</html>

<?php /**PATH C:\xampp\Laravel\resources\views/index/detail.blade.php ENDPATH**/ ?>