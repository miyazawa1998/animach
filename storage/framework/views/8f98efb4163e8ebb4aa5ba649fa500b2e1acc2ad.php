<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('css/list.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <div class="list__container">
    <h1 class="list__title">検索結果</h1>
    <div class="list__contents">
      <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <form class="list__box">
        <?php echo csrf_field(); ?>
        <div class="list__box_inner">
          <input type="hidden" value="<?php echo e($user_id); ?>" name="user_id">
          <input type="hidden" value="<?php echo e($content->id); ?>" name="contents_id">
          <p class="list__box_inner-title"><?php echo e($content->category); ?></p>
          <div class="list__box_inner-flex">
            <div>
              <img class="list__box_inner-img" src="images/<?php echo e($content->img); ?>" alt="検索結果の写真">
            </div>
            <div class="list__box_detail">
              <dl class="list__box_detail-data">
                <dt>家族形態</dt>
                <dd class="list__box_dd"><?php echo e($content->home_data); ?></dd>
              </dl>
              <dl class="list__box_detail-data">
                <dt>ライフスタイル</dt>
                <dd class="list__box_dd"><?php echo e($content->life_style); ?></dd> 
              </dl>
              <dl class="list__box_detail-data last-data">
                <dt>なつき度</dt>
                <dd class="list__box_dd"><?php echo e($content->friendly); ?></dd>
              </dl>
              <div class="list__box_btn">
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


<?php echo $__env->make('common.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\resources\views//list/index.blade.php ENDPATH**/ ?>