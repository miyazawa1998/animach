@extends('common.layout')

@push('css')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endpush

@push( 'script' )
<script src="{{ asset('js/login.js') }}" defer></script>
@endpush

@section('content')
<div class="login__container">
  <div class="login__title_box">
    <h1 class="login__title">ログイン</h1>
  </div>
  <div class="login__contents">
    <form  name="login_form">
      @csrf
      <meta name="csrf-token" content="{{ csrf_token() }}">
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
          <input class="login__btn submit" type="submit" value="ゲストログイン" formaction="{{ url('/guestLogin') }}" formmethod="post">
        </div>
      </div>
      <div class="singup__block">
        <a href="{{ url('/singup') }}">始めて利用する方は新規登録</a>
      </div>
    </form>
  </div>
</div>
@endsection

