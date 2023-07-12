<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('css/top.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/detail.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="first">
  <div class="changeCard">
    <h1 class="mb-5">動物の詳細</h1>
    <ul>
      <form action="?" id="home_form">
        <?php echo csrf_field(); ?>
        <li class="changeItem gridVertical">
          <div class="listdesign">
            <img src="images/pig.jpg" alt="SNSの流入を増やすOGP設定のスニペット3種">
              <div class="changeItemTxt"> 
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
              </div>
          </div>
        </li>
      </form>
    </ul>
  </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('common.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\resources\views//detail/index.blade.php ENDPATH**/ ?>