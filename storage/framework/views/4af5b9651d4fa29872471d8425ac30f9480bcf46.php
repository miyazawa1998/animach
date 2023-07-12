<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('css/result.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush( 'script' ); ?>
<script src="<?php echo e(asset('js/result.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="result__container">
  <h1 class="result__title">詳細</h1>
  <div class="result__contents" >
    <div class="result__box">
      <div class="result__box_inner">
        <form class="comment__bookmarks_form">
        <?php echo csrf_field(); ?>
        <div class="">
          <input type="hidden" value="<?php echo e($result_data->id); ?>" name="contents_id">
          <input type="hidden" value="<?php echo e($user_id); ?>" name="user_id">
          <div class="result__box_head">
            <p class="result__box_inner-title"><?php echo e($result_data->category); ?></p>
            <?php if($user_id): ?>
              <?php if($user_id != 1): ?>
                <?php if($bookmark): ?>
                <div class="bookmarks-btn">
                  <input class="submit" type="submit" name="bookmarks" value="ブックマーク解除" formmethod="post" formaction="<?php echo e(url('/removeBookmarks')); ?>">
                </div>
                <?php else: ?>
                <div class="bookmarks-btn">
                  <input class="submit" type="submit" name="bookmarks" value="ブックマークする" formmethod="post" formaction="<?php echo e(url('/addbookmarks')); ?>">
                </div>
                <?php endif; ?>
              <?php endif; ?>
            <?php endif; ?>
          </div>

          <div class="result__box_inner-flex">
            <div>
              <img class="result__box_inner-img" src="images/<?php echo e($result_data->img); ?>" alt="詳細の写真">
            </div>
            <div class="result__box_detail">
              <dl class="result__box_detail-data">
                <dt>家族形態</dt>
                <dd class="result__box_dd"><?php echo e($result_data->home_data); ?></dd>
              </dl>
              <dl class="result__box_detail-data">
                <dt>ライフスタイル</dt>
                <dd class="result__box_dd"><?php echo e($result_data->life_style); ?></dd>
              </dl>
              <dl class="result__box_detail-data">
                <dt>触れ合い</dt>
                <dd class="result__box_dd"><?php echo e($result_data->friendly); ?></dd>
              </dl>
              <dl class="result__box_detail-data">
                <dt>説明</dt>
                <dd class="result__box_dd"><?php echo e($result_data->description); ?></dd>
              </dl>
              <dl class="result__box_detail-data">
                <dt>ポイント</dt>
                <dd class="result__box_dd"><?php echo e($result_data->point); ?></dd>
              </dl>
            </div>
          </div>
        </div>
        </form>
        <div class="comment">
          <p class="comment_title">コメント一覧</p>
          <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <form class="comment__box_form">
            <?php echo csrf_field(); ?>
            <div class="comment__box">
            <?php if($comment->user_id == $user_id ): ?>
              <input class="comment__trash_icon" type="image" name="" src="images/trash_icon.png"  alt="" value="" formmethod="post" formaction="<?php echo e(url('/delite')); ?>">
            <?php endif; ?>
              <p class="comment_text"><?php echo e($comment->comment); ?></p>
              <input type="hidden" value="<?php echo e($comment->user_id); ?>" name="comment_userId">
              <input type="hidden" value="<?php echo e($comment->id); ?>" name="comment_Id">
              <input type="hidden" value="<?php echo e($result_data->id); ?>" name="contents_id">
            </div>
          </form>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php if($user_id): ?>
            <?php if($user_id != 1): ?>
              <input id="modal_open" class="submit comment__submit" type="submit" name="comment" value="コメントする">
            <?php endif; ?>
          <?php endif; ?>
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
                <p>コメントを投稿</p>
              </div>
              <div class="modal__comment">
                <form class="comment__modal_form">
                  <div class="modal__comment_text">
                    <p>コメント</p>
                  </div>
                  <div>
                    <textarea name="comment" cols="30" rows="10" class="comment_area" value=""></textarea>
                  </div>
                  <div>
                      <input type="hidden" value="<?php echo e($result_data->id); ?>" name="contents_id">
                      <input type="hidden" value="<?php echo e($user_id); ?>" name="user_id">
                      <input class="submit" type="submit" name="commit" value="コメント投稿" formmethod="get" formaction="<?php echo e(url('/commit')); ?>">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="back__list">
      <a class="submit result_submit" href="javascript:$('#a-post').submit()">一覧へ戻る</a>
      <form id="a-post" action="<?php echo e(route('list')); ?>" method="post" style="display: none">
        <?php echo csrf_field(); ?>
      </form>  
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('common.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\Laravel\resources\views//result/index.blade.php ENDPATH**/ ?>