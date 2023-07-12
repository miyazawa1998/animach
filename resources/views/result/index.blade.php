@extends('common.layout')

@push('css')
    <link href="{{ asset('css/result.css') }}" rel="stylesheet">
@endpush

@push( 'script' )
<script src="{{ asset('js/result.js') }}" defer></script>
@endpush

@section('content')
<div class="result__container">
  <h1 class="result__title">詳細</h1>
  <div class="result__contents" >
    <div class="result__box">
      <div class="result__box_inner">
        <form class="comment__bookmarks_form">
        @csrf
        <div class="">
          <input type="hidden" value="{{ $result_data->id }}" name="contents_id">
          <input type="hidden" value="{{ $user_id }}" name="user_id">
          <div class="result__box_head">
            <p class="result__box_inner-title">{{  $result_data->category}}</p>
            @if($user_id)
              @if($user_id != 1)
                @if($bookmark)
                <div class="bookmarks-btn">
                  <input class="submit" type="submit" name="bookmarks" value="ブックマーク解除" formmethod="post" formaction="{{ url('/removeBookmarks') }}">
                </div>
                @else
                <div class="bookmarks-btn">
                  <input class="submit" type="submit" name="bookmarks" value="ブックマークする" formmethod="post" formaction="{{ url('/addbookmarks') }}">
                </div>
                @endif
              @endif
            @endif
          </div>

          <div class="result__box_inner-flex">
            <div>
              <img class="result__box_inner-img" src="images/{{$result_data->img}}" alt="詳細の写真">
            </div>
            <div class="result__box_detail">
              <dl class="result__box_detail-data">
                <dt>家族形態</dt>
                <dd class="result__box_dd">{{  $result_data->home_data}}</dd>
              </dl>
              <dl class="result__box_detail-data">
                <dt>ライフスタイル</dt>
                <dd class="result__box_dd">{{  $result_data->life_style}}</dd>
              </dl>
              <dl class="result__box_detail-data">
                <dt>触れ合い</dt>
                <dd class="result__box_dd">{{  $result_data->friendly}}</dd>
              </dl>
              <dl class="result__box_detail-data">
                <dt>説明</dt>
                <dd class="result__box_dd">{{  $result_data->description}}</dd>
              </dl>
              <dl class="result__box_detail-data">
                <dt>ポイント</dt>
                <dd class="result__box_dd">{{  $result_data->point}}</dd>
              </dl>
            </div>
          </div>
        </div>
        </form>
        <div class="comment">
          <p class="comment_title">コメント一覧</p>
          @foreach($comments as $comment)
          <form class="comment__box_form">
            @csrf
            <div class="comment__box">
            @if($comment->user_id == $user_id )
              <input class="comment__trash_icon" type="image" name="" src="images/trash_icon.png"  alt="" value="" formmethod="post" formaction="{{ url('/delite') }}">
            @endif
              <p class="comment_text">{{  $comment->comment}}</p>
              <input type="hidden" value="{{ $comment->user_id }}" name="comment_userId">
              <input type="hidden" value="{{ $comment->id }}" name="comment_Id">
              <input type="hidden" value="{{ $result_data->id }}" name="contents_id">
            </div>
          </form>
          @endforeach
          @if($user_id)
            @if($user_id != 1)
              <input id="modal_open" class="submit comment__submit" type="submit" name="comment" value="コメントする">
            @endif
          @endif
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
                      <input type="hidden" value="{{ $result_data->id }}" name="contents_id">
                      <input type="hidden" value="{{ $user_id }}" name="user_id">
                      <input class="submit" type="submit" name="commit" value="コメント投稿" formmethod="get" formaction="{{ url('/commit') }}">
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
      <form id="a-post" action="{{ route('list') }}" method="post" style="display: none">
        @csrf
      </form>  
    </div>
  </div>
</div>
@endsection

