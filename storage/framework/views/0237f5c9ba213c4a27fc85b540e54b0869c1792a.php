<?php $__env->startPush('css'); ?>
<link href="<?php echo e(asset('css/top.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="first">
  <div class="centerText">
    Sing Up
    <div style="margin:20px;">
      <div >
        <?php if($errors->has('name')): ?>
          <p class="alert"><?php echo e($errors->first('name')); ?></p>
        <?php endif; ?>
        <?php if($errors->has('email')): ?>
          <p class="alert"><?php echo e($errors->first('email')); ?></p>
        <?php endif; ?>
        <?php if($errors->has('password')): ?>
          <p class="alert"><?php echo e($errors->first('password')); ?></p>
        <?php endif; ?>
        <form name="" action="<?php echo e(url('/edite')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
          <div >
            ニックネーム、メールアドレス、パスワードをご確認の上、</br>
            「編集」ボタンをクリックしてください。
          </div>
          <div >
            <input class="txt" type="text" id="user_name" name="name"  value="<?php echo e($users->name); ?>" placeholder="UserName">
            <input class="txt" type="id" id="user_id" name="email" value="<?php echo e($users->email); ?>"placeholder="UserID">
            <input class="txt" type="password" id="password"  name="password" value="<?php echo e($users->password); ?>" placeholder="Password">
          </div>
          <button  id="submit_btn" type="submit">編集</button>
          <a  href="<?php echo e(url('/mypage')); ?>">マイページへ戻る</a>
        </form>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('common.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\resources\views//account/index.blade.php ENDPATH**/ ?>