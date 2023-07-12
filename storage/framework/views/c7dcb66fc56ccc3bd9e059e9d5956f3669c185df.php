<?php $__env->startPush('css'); ?>
<link href="<?php echo e(asset('css/common.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/article.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush( 'script' ); ?>
<script src="<?php echo e(asset('js/article.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="article__container">
  <div class="article__title_block">
    <h1 class="article__title">アニマル一覧</h1>
  </div>
  <div class="article__search_block">
    <form class="search__box" action="<?php echo e(url('/list')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <div class="freeword__search">
        <input class="freeword__search_input" type="text" id="word" name="word" placeholder="犬 猫 うさぎ etc…" >
        <input class="freeword__search_submit" type="image" name="" src="images/search_icon.png" alt="" value="" >
      </div> 
    </form>
    <form  action="<?php echo e(url('/list')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <div class="select__search">
        <p class="select__toggle">絞り込み検索をする▼</p>
        <div class="select__search_block">
          <div class="select__search_inner">
            <div class="select__search_box">
              <label class="select__search_label" for="family_id" >家族形態</label> 
              <select class="select__search_option" name="family" id="family">
                <option value="0">選択なし</option> 
                <option value="一人暮らし">一人暮らし</option> 
                <option value="同居(二人)">同居(二人)</option> 
                <option value="同居(高齢者)">同居(高齢者)</option> 
                <option value="家に常に人がいる">家に常に人がいる</option> 
                <option value="家族がアレルギー持ち">家族がアレルギー持ち</option>
              </select>
            </div> 

            <div class="select__search_box">
              <label class="select__search_label" for="lifestyle_id">ライフスタイル</label>
              <select class="select__search_option" name="lifestyle" id="lifestyle">
                <option value="0">選択なし</option> 
                <option value="アウトドア">アウトドア</option> 
                <option value="インドア">インドア</option>
                <option value="休日は家にいる">休日は家にいる</option> 
              </select>
            </div> 
            
            <div class="select__search_box">
              <label class="select__search_label" for="friendly">なつき度</label> 
              <select class="select__search_option" name="friendly" id="friendly">
                <option value="0">選択なし</option> 
                <option value="常に一緒にいたい">常に一緒にいたい</option> 
                <option value="ほどほどに触れ合いたい">ほどほどに触れ合いたい</option> 
                <option value="お世話だけでもいい">お世話だけでもいい</option> 
                </select>
            </div> 
          </div>
          <div class="search__btn">
            <input class="submit" type="submit" name="search" value="検索" >
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="article__contents">
    <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form class="article__box">
      <?php echo csrf_field(); ?>
      <div class="article__box_inner">
        <input type="hidden" value="<?php echo e($user_id); ?>" name="user_id">
        <input type="hidden" value="<?php echo e($content->id); ?>" name="contents_id">
        <p class="article__box_inner-title"><?php echo e($content->category); ?></p>
        <div class="article__box_inner-flex">
          <div>
            <img class="article__box_inner-img" src="images/<?php echo e($content->img); ?>" alt="検索結果の写真">
          </div>
          <div class="article__box_detail">
            <dl class="article__box_detail-data">
              <dt>家族形態</dt>
              <dd class="article__box_dd"><?php echo e($content->home_data); ?></dd>
            </dl>
            <dl class="article__box_detail-data">
              <dt>ライフスタイル</dt>
              <dd class="article__box_dd"><?php echo e($content->life_style); ?></dd> 
            </dl>
            <dl class="article__box_detail-data last-data">
              <dt>なつき度</dt>
              <dd class="article__box_dd"><?php echo e($content->friendly); ?></dd>
            </dl>
            <div class="article__box_btn">
              <input class="submit" type="submit" name="detail" value="詳細をもっと見る" formmethod="post" formaction="<?php echo e(url('/result')); ?>">
            </div>
          </div>
        </div>
      </div>
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('common.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\resources\views//article/index.blade.php ENDPATH**/ ?>