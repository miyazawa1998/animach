@extends('common.layout')

@push('css')
    <link href="{{ asset('css/singUp.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="singup__container">
  <div class="singup__title_box">
    <h2 class="singup__title">新規登録</h2>
  </div>
  <div class="singup__contents">
    <form name="login_form" action="{{ url('/store') }}" method="POST">
      @csrf
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <div class="singup__text_block">
        <p class="singup__text">
        ユーザーネーム、メールアドレス、パスワードをご入力の上、</br>
              「登録」ボタンをクリックしてください。
        </p>
      </div>
      <div class="singup__block">
        @if ($errors->has('name'))
        <p>
          <label for="user_name">ユーザーネーム</label>
          <input class="singup__input" type="text" id="user_name" name="name"  value="{{ old('name') }}" placeholder="ユーザーネーム">
          <span class="errmes">{{ $errors->first('name') }}</span>
        </p>
        @else
        <p>
          <label for="user_name">ユーザーネーム</label>
          <input class="singup__input" type="text" id="user_name" name="name"  value="{{ old('name') }}" placeholder="ユーザーネーム">
        </p>
        @endif
        @if ($errors->has('email'))
        <p>
          <label for="user_id">メールアドレス</label>
          <input class="singup__input" type="id" id="user_id" name="email" value="{{ old('email') }}"placeholder="メールアドレス">
          <span class="errmes">{{ $errors->first('email') }}</span>
        </p>
        @else
        <p>
          <label for="user_id">メールアドレス</label>
          <input class="singup__input" type="id" id="user_id" name="email" value="{{ old('email') }}"placeholder="メールアドレス">
        </p>
        @endif
        @if ($errors->has('password'))
        <p>
          <label for="password">パスワード</label>
          <input class="singup__input" type="password" id="password"  name="password" value="{{ old('password') }}" placeholder="パスワード">
          <span class="errmes">{{ $errors->first('password') }}</span>
        </p>
        @else
        <p>
          <label for="password">パスワード</label>
          <input class="singup__input" type="password" id="password"  name="password" value="{{ old('password') }}" placeholder="パスワード">
        </p>
        @endif
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
@endsection

