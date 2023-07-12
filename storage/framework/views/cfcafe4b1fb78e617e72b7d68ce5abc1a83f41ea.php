<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('css/top.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
  <form method="get">
    <input type="hidden" name="user_id" value="<?php echo e(request()->query('id')); ?>" />
  </form>
  <!-- "ペットとの絆は、あなたの生きる力になります。"
  "ペットとの楽しい時間は、あなたの笑顔を増やしてくれます。"
  "ペットとの暮らしは、あなたの人生をもっと豊かにしてくれます。" -->

  <div>
    <form action="<?php echo e(url('/list')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <div>
        <label for="name" >フリーワード</label> 
        <div>
          <input type="text" id="word" name="word" placeholder="犬 猫 うさぎ etc…" >
        </div>
      </div> 
      <div>
        <div>
          <label for="family_id" >家族形態</label> 
          <select name="family" id="family">
            <option value="0">選択なし</option> 
            <option value="一人暮らし">一人暮らし</option> 
            <option value="同居(二人)">同居(二人)</option> 
            <option value="同居(高齢者)">同居(高齢者)</option> 
            <option value="家に常に人がいる">家に常に人がいる</option> 
            <option value="家族がアレルギー持ち">家族がアレルギー持ち</option>
          </select>
        </div> 

        <div>
          <label for="lifestyle_id">ライフスタイル</label>
          <select name="lifestyle" id="lifestyle">
            <option value="0">選択なし</option> 
            <option value="アウトドア">アウトドア</option> 
            <option value="インドア">インドア</option>
            <option value="休日は家にいる">休日は家にいる</option> 
          </select>
        </div> 
        
        <div >
          <label for="friendly">なつき度</label> 
          <select name="friendly" id="friendly">
            <option value="0">選択なし</option> 
            <option value="常に一緒にいたい">常に一緒にいたい</option> 
            <option value="ほどほどに触れ合いたい">ほどほどに触れ合いたい</option> 
            <option value="お世話だけでもいい">お世話だけでもいい</option> 
            </select>
        </div> 
        <div >
          <input type="submit" name="search" value="検索" >
        </div>
      </div>
    </form>
  </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('common.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\resources\views/index/home.blade.php ENDPATH**/ ?>