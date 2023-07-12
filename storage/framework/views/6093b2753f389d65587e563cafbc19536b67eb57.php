<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush( 'script' ); ?>
<script src="<?php echo e(asset('js/login.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="login__container">
  <div class="login__title_box">
    <h1 class="login__title">ログイン</h1>
  </div>
  <div class="login__contents">
    <form  name="login_form">
      <?php echo csrf_field(); ?>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <div class="login__text_block">
        <p class="login__text">メールアドレス、パスワードをご入力の上、「ログイン」ボタンをクリックしてください。</p>
      </div>
      <div class="login__block">
        <div class="login__block_input">
          <p>
            <label for="user_id">メールアドレス</label>
            <input class="login__input" type="id" name="user_id" placeholder="メールアドレス" id="user_id">
            <span class="errMail errmes"></span>
          </p>
          <p>
            <label for="password">パスワード</label>
            <input class="login__input" type="password" name="password" placeholder="パスワード" id="password">
            <span class="errPassword errmes"></span>
          </p> 
        </div>
        <div class="login__block_btn">
          <input class="login__btn submit" type="button" name="botton" value="ログイン" id="login_btn">
          <p class="login__btn_text">または</p>
          <input class="login__btn submit" type="submit" value="ゲストログイン" formaction="<?php echo e(url('/guestLogin')); ?>" formmethod="post">
        </div>
      </div>
      <div class="singup__block">
        <a href="<?php echo e(url('/singup')); ?>">始めて利用する方は新規登録</a>
      </div>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('common.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\resources\views//login/index.blade.php ENDPATH**/ ?>