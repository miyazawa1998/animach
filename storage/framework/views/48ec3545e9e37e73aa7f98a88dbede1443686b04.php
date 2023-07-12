<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('css/singUp.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="singup__container">
  <div class="singup__title_box">
    <h2 class="singup__title">新規登録</h2>
  </div>
  <div class="singup__contents">
    <form name="login_form" action="<?php echo e(url('/store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <div class="singup__text_block">
        <p class="singup__text">
        ユーザーネーム、メールアドレス、パスワードをご入力の上、</br>
              「登録」ボタンをクリックしてください。
        </p>
      </div>
      <div class="singup__block">
        <?php if($errors->has('name')): ?>
        <p>
          <label for="user_name">ユーザーネーム</label>
          <input class="singup__input" type="text" id="user_name" name="name"  value="<?php echo e(old('name')); ?>" placeholder="ユーザーネーム">
          <span class="errmes"><?php echo e($errors->first('name')); ?></span>
        </p>
        <?php else: ?>
        <p>
          <label for="user_name">ユーザーネーム</label>
          <input class="singup__input" type="text" id="user_name" name="name"  value="<?php echo e(old('name')); ?>" placeholder="ユーザーネーム">
        </p>
        <?php endif; ?>
        <?php if($errors->has('email')): ?>
        <p>
          <label for="user_id">メールアドレス</label>
          <input class="singup__input" type="id" id="user_id" name="email" value="<?php echo e(old('email')); ?>"placeholder="メールアドレス">
          <span class="errmes"><?php echo e($errors->first('email')); ?></span>
        </p>
        <?php else: ?>
        <p>
          <label for="user_id">メールアドレス</label>
          <input class="singup__input" type="id" id="user_id" name="email" value="<?php echo e(old('email')); ?>"placeholder="メールアドレス">
        </p>
        <?php endif; ?>
        <?php if($errors->has('password')): ?>
        <p>
          <label for="password">パスワード</label>
          <input class="singup__input" type="password" id="password"  name="password" value="<?php echo e(old('password')); ?>" placeholder="パスワード">
          <span class="errmes"><?php echo e($errors->first('password')); ?></span>
        </p>
        <?php else: ?>
        <p>
          <label for="password">パスワード</label>
          <input class="singup__input" type="password" id="password"  name="password" value="<?php echo e(old('password')); ?>" placeholder="パスワード">
        </p>
        <?php endif; ?>
      </div>
      <div class="singup__block_btn">
        <input class="submit singup__btn" id="submit_btn"  type="submit" value="登録">
      </div>
      <div class="login__back">
        <a  href="login">ログイン画面へ戻る</a>
      </div>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('common.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\resources\views//singup/index.blade.php ENDPATH**/ ?>