@extends('common.layout')

@push('css')
<link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endpush

@section('content')
<section class="first">
  <div class="centerText">
    Sing Up
    <div style="margin:20px;">
      <div >
        @if ($errors->has('name'))
          <p class="alert">{{ $errors->first('name') }}</p>
        @endif
        @if ($errors->has('email'))
          <p class="alert">{{ $errors->first('email') }}</p>
        @endif
        @if ($errors->has('password'))
          <p class="alert">{{ $errors->first('password') }}</p>
        @endif
        <form name="" action="{{ url('/edite') }}" method="POST">
          @csrf
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <div >
            ニックネーム、メールアドレス、パスワードをご確認の上、</br>
            「編集」ボタンをクリックしてください。
          </div>
          <div >
            <input class="txt" type="text" id="user_name" name="name"  value="{{ $users->name }}" placeholder="UserName">
            <input class="txt" type="id" id="user_id" name="email" value="{{ $users->email }}"placeholder="UserID">
            <input class="txt" type="password" id="password"  name="password" value="{{ $users->password }}" placeholder="Password">
          </div>
          <button  id="submit_btn" type="submit">編集</button>
          <a  href="{{ url('/mypage') }}">マイページへ戻る</a>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection

