<?php $__env->startPush('css'); ?>
<link href="<?php echo e(asset('css/myPage.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush( 'script' ); ?>
<script src="<?php echo e(asset('js/result.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="mypage__container">
  <div class="mypage__account">
    <h2 class="mypage__title">アカウント編集</h2>
    <div class="mypage__userData">
      <div class="mypage__flex">
        <div class="user__icon_inner">
          <img class="user_icon" src="images/<?php echo e($user_icon->icon_images); ?>" alt="ユーザーのアイコン">
          <input id="modal_open" class="submit" type="submit" name="change" value="アイコンを選ぶ">
          <div class="overlay" id="overlay"></div>
          <div class="modal" id="modal">
            <div class="modal-close__wrap">
              <button class="modal-close" id="modal_close">
                <span></span>
                <span></span>
              </button>
            </div>
            <div >
              <div class="modal__title">
                <p>アイコンを選択</p>
              </div>
              <div class="modal__icon">
                <div class="modal__icon_inner">
                  <?php $__currentLoopData = $all_icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icons): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <form>
                  <?php echo csrf_field(); ?>
                    <input type="hidden" name="user_id" value="<?php echo e($user_id); ?>">
                    <input type="hidden" name="icon_id" value="<?php echo e($icons->id); ?>">
                    <p class="user_icon-name"><?php echo e($icons->icon_name); ?></p>
                    <input class="user_icon" type="image" name="user_icon" src="images/<?php echo e($icons->icon_image); ?>"  alt="ユーザーアイコン" value="" formmethod="post" formaction="<?php echo e(url('/change')); ?>">
                  </form>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            </div>
            </div>
        </div>
        <div class="user__data">
          <form class="user__form" action="<?php echo e(url('/edite')); ?>" method="POST">
          <?php echo csrf_field(); ?>
            <div class="user__form_inner">
              <input type="hidden" name="user_id" value="<?php echo e($user_id); ?>">
              <input class="user__data_input" type="text" name="user_name" value="<?php echo e($user->name); ?>">
              <input class="user__data_input" type="text" name="user_email" value="<?php echo e($user->email); ?>">
              <input class="user__data_input" type="text" name="user_pass" value="<?php echo e($user->password); ?>">
            </div>
            <div>
              <input class="submit" type="submit" name="edite" value="変更">
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
  <div class="mypage__contents">
    <div class="bookmarks">
      <h2 class="bookmarks__title">ブックマーク一覧</h2>
      <div class="bookmarks__inner">
        <?php $__currentLoopData = $contents_bkm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form>
        <?php echo csrf_field(); ?>
          <div class="bookmarks__box">
            <input type="hidden" name="user_id" value="<?php echo e($user_id); ?>">
            <input type="hidden" name="contents_id" value="<?php echo e($bkm->id); ?>">
            <p class="bookmarks__box_title"><?php echo e($bkm->category); ?></p>
            <div class="bookmarks__box_img">
              <input class="bookmarks__box_inner-img" type="image" name="" src="images/<?php echo e($bkm->img); ?>"  alt="ブックマークした動物の写真" value="" formmethod="post" formaction="<?php echo e(url('/result')); ?>">
            </div>
          </div>
        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
    <div class="comments">
      <h2 class="comments__title">コメント一覧</h2>
      <div class="comments__inner">
        <?php $__currentLoopData = $comment_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $come_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php $__currentLoopData = $contents_come; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $come): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($come_user->contents_id == $come->id): ?>
              <div class="comments__box_form">
                <div class="comments__box">
                  <p class="comments__subTitle"><?php echo e($come->category); ?>へのコメント</p>
                  <input type="hidden" name="contents_id" value="<?php echo e($come->id); ?>">
                  <p class="my_comment"><?php echo e($come_user->comment); ?></p>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>    
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('common.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\resources\views//mypage/index.blade.php ENDPATH**/ ?>