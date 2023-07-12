@extends('common.layout')

@push('css')
<link href="{{ asset('css/common.css') }}" rel="stylesheet">
<link href="{{ asset('css/article.css') }}" rel="stylesheet">
@endpush

@push( 'script' )
<script src="{{ asset('js/article.js') }}" defer></script>
@endpush

@section('content')
<div class="article__container">
  <div class="article__title_block">
    <h1 class="article__title">アニマル一覧</h1>
  </div>
  <div class="article__search_block">
    <form class="search__box" action="{{ url('/list') }}" method="POST">
      @csrf
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <div class="freeword__search">
        <input class="freeword__search_input" type="text" id="word" name="word" placeholder="犬 猫 うさぎ etc…" >
        <input class="freeword__search_submit" type="image" name="" src="images/search_icon.png" alt="" value="" >
      </div> 
    </form>
    <form  action="{{ url('/list') }}" method="POST">
      @csrf
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <div class="select__search">
        <p class="select__toggle">絞り込み検索をする▼</p>
        <div class="select__search_block">
          <div class="select__search_inner">
            <div class="select__search_box">
              <label class="select__search_label" for="family_id" >家族形態</label> 
              <select class="select__search_option" name="family" id="family">
                <option value="0">選択なし</option> 
                <option value="一人暮らし">一人暮らし</option> 
                <option value="同居(二人)">同居(二人)</option> 
                <option value="同居(高齢者)">同居(高齢者)</option> 
                <option value="家に常に人がいる">家に常に人がいる</option> 
                <option value="家族がアレルギー持ち">家族がアレルギー持ち</option>
              </select>
            </div> 

            <div class="select__search_box">
              <label class="select__search_label" for="lifestyle_id">ライフスタイル</label>
              <select class="select__search_option" name="lifestyle" id="lifestyle">
                <option value="0">選択なし</option> 
                <option value="アウトドア">アウトドア</option> 
                <option value="インドア">インドア</option>
                <option value="休日は家にいる">休日は家にいる</option> 
              </select>
            </div> 
            
            <div class="select__search_box">
              <label class="select__search_label" for="friendly">触れ合い</label> 
              <select class="select__search_option" name="friendly" id="friendly">
                <option value="0">選択なし</option> 
                <option value="常に一緒にいたい">常に一緒にいたい</option> 
                <option value="ほどほどに触れ合いたい">ほどほどに触れ合いたい</option> 
                <option value="お世話だけでもいい">お世話だけでもいい</option> 
                </select>
            </div> 
          </div>
          <div class="search__btn">
            <input class="submit" type="submit" name="search" value="検索" >
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="article__contents">
    @foreach($contents as $content)
    <form class="article__box">
      @csrf
      <div class="article__box_inner">
        <input type="hidden" value="{{ $user_id }}" name="user_id">
        <input type="hidden" value="{{ $content->id }}" name="contents_id">
        <p class="article__box_inner-title">{{ $content->category }}</p>
        <div class="article__box_inner-flex">
          <div>
            <img class="article__box_inner-img" src="images/{{$content->img}}" alt="検索結果の写真">
          </div>
          <div class="article__box_detail">
            <dl class="article__box_detail-data">
              <dt>家族形態</dt>
              <dd class="article__box_dd">{{ $content->home_data }}</dd>
            </dl>
            <dl class="article__box_detail-data">
              <dt>ライフスタイル</dt>
              <dd class="article__box_dd">{{ $content->life_style }}</dd> 
            </dl>
            <dl class="article__box_detail-data last-data">
              <dt>なつき度</dt>
              <dd class="article__box_dd">{{ $content->friendly }}</dd>
            </dl>
            <div class="article__box_btn">
              <input class="submit" type="submit" name="detail" value="詳細をもっと見る" formmethod="post" formaction="{{ url('/result') }}">
            </div>
          </div>
        </div>
      </div>
    </form>
    @endforeach
  </div>
</div>
@endsection

