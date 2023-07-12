

@extends('common.layout')

@push('css')
<link href="{{ asset('css/myPage.css') }}" rel="stylesheet">
@endpush

@push( 'script' )
<script src="{{ asset('js/result.js') }}" defer></script>
@endpush

@section('content')
<div class="mypage__container">
  <div class="mypage__account">
    <h2 class="mypage__title">アカウント編集</h2>
    <div class="mypage__userData">
      <div class="mypage__flex">
        <div class="user__icon_inner">
          <img class="user_icon" src="images/{{$user_icon->icon_images}}" alt="ユーザーのアイコン">
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
                  @foreach($all_icons as $icons)
                  <form>
                  @csrf
                    <input type="hidden" name="user_id" value="{{ $user_id}}">
                    <input type="hidden" name="icon_id" value="{{$icons->id}}">
                    <p class="user_icon-name">{{$icons->icon_name}}</p>
                    <input class="user_icon" type="image" name="user_icon" src="images/{{$icons->icon_image}}"  alt="ユーザーアイコン" value="" formmethod="post" formaction="{{ url('/change') }}">
                  </form>
                  @endforeach
                </div>
              </div>
            </div>
            </div>
        </div>
        <div class="user__data">
          <form class="user__form" action="{{ url('/edite') }}" method="POST">
          @csrf
            <div class="user__form_inner">
              <input type="hidden" name="user_id" value="{{ $user_id}}">
              <input class="user__data_input" type="text" name="user_name" value="{{ $user->name}}">
              <input class="user__data_input" type="text" name="user_email" value="{{ $user->email}}">
              <input class="user__data_input" type="text" name="user_pass" value="{{ $user->password}}">
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
        @foreach($contents_bkm as $bkm)
        <form>
        @csrf
          <div class="bookmarks__box">
            <input type="hidden" name="user_id" value="{{ $user_id}}">
            <input type="hidden" name="contents_id" value="{{ $bkm->id}}">
            <p class="bookmarks__box_title">{{ $bkm->category }}</p>
            <div class="bookmarks__box_img">
              <input class="bookmarks__box_inner-img" type="image" name="" src="images/{{$bkm->img}}"  alt="ブックマークした動物の写真" value="" formmethod="post" formaction="{{ url('/result') }}">
            </div>
          </div>
        </form>
        @endforeach
      </div>
    </div>
    <div class="comments">
      <h2 class="comments__title">コメント一覧</h2>
      <div class="comments__inner">
        @foreach($comment_user as $come_user)
          @foreach($contents_come as $come)
            @if($come_user->contents_id == $come->id)
              <div class="comments__box_form">
                <div class="comments__box">
                  <p class="comments__subTitle">{{ $come->category }}へのコメント</p>
                  <input type="hidden" name="contents_id" value="{{  $come->id }}">
                  <p class="my_comment">{{ $come_user->comment }}</p>
                </div>
              </div>
            @endif
          @endforeach
        @endforeach
      </div>
    </div>    
  </div>
</div>
@endsection

