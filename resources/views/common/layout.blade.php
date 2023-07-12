<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>animach</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
<link rel="stylesheet" href="css/common.css">
<!-- 各ページCSS呼び出し -->
@stack('css')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- 各ページJS呼び出し -->
@stack('script')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <nav class="menubar">
        <ul class="menubar__list">
          <div class="menubar__title">
            <p class="header__title"><a href="{{ url('/') }}">animach</a></p>
          </div>
          <div class="menubar__nav">
            @if(!$user_id)
              <li class="menubar__list_item"><a href="{{ url('/article') }}">アニマル紹介</a></li>
              <li class="menubar__list_item"><a href="{{ url('/login') }}">ログイン</a></li>
              <li class="menubar__list_item"><a href="{{ url('/singup') }}">新規登録</a></li>
            @else
              <li class="menubar__list_item"><a href="{{ url('/article') }}">アニマル紹介</a></li>
              <div class="menubar__account">
                <li class="menubar__list_item user__menu"><img class="header__user_icon" src="images/{{$user_icon->icon_images}}" alt="ユーザーのアイコン"></li>
                <div class="triangle"></div>
              </div>
            @endif
          </div>
        </ul>
        <div>
          @if($user_id == 1)
            <ul class="show__menu">
              <li class="show__menu_list"><a class="show__menu_link" href="{{ url('/logout') }}">ログアウト</a></li>
            </ul>
          @else
            <ul class="show__menu">
              <li class="show__menu_list"><a class="show__menu_link" href="{{ url('/mypage') }}">マイページ</a></li>
              <li class="show__menu_list"><a class="show__menu_link" href="{{ url('/logout') }}">ログアウト</a></li>
            </ul>
          @endif
        </div>
      </nav>
    </div>
  </header>
  <main>
    <div class="content">
    @yield('content')
    </div>
  </main>
  <footer class="footer">
    <div class="footer__inner">
      <small>Copyright&copy; 2023 Ayaka Miyazawa All Rights Reserved.</small>
    </div>
  </footer>
  <script>
    $(function(){
      $(".menubar__account").on('click',function(){
        $(".show__menu").toggle();
        $(".show__menu_list").show();
      });
    });
  </script>
</body>
</html>