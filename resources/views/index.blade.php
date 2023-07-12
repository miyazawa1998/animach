@extends('common.layout')

@push('css')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="top__container">
  <input type="hidden" name="user_id" value="{{ request('id') }}" />
  <!-- "ペットとの絆は、あなたの生きる力になります。"
  "ペットとの楽しい時間は、あなたの笑顔を増やしてくれます。"
  "ペットとの暮らしは、あなたの人生をもっと豊かにしてくれます。" -->
  <div class="top__contents">
    <div class="title__box">
      <h1 class="top__title">animach</h1>
      <p class="top__title_text">あなたのライフスタイルにぴったりな動物を探しませんか？</p>
    </div>
    <form class="search__box" action="{{ url('/list') }}" method="POST">
      @csrf
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <div class="freeword__search">
        <label class="freeword__search_label" for="name" >フリーワード</label> 
        <div>
          <input class="freeword__search_input" type="text" id="word" name="word" placeholder="犬 猫 うさぎ etc…" >
        </div>
      </div> 
      <div class="select__search">
        <div class="select__search_box">
          <label class="select__search_label" for="family_id" >家族形態</label> 
          <select class="select__search_option" name="family" id="family">
            <option value="0">選択なし</option> 
            <option value="一人暮らし">一人暮らし</option> 
            <option value="二人暮らし(同棲・夫婦・友達・家族)">二人暮らし(同棲・夫婦・友達・家族)</option> 
            <option value="同居(高齢者)">同居(高齢者)</option> 
          </select>
        </div> 

        <div class="select__search_box">
          <label class="select__search_label" for="lifestyle_id">ライフスタイル</label>
          <select class="select__search_option" name="lifestyle" id="lifestyle">
            <option value="0">選択なし</option> 
            <option value="基本の生活(決まった時間に出社/退勤し、土日予定があれば出かける等)">基本の生活(決まった時間に出社/退勤し、土日予定があれば出かける等)</option> 
            <option value="仕事のため家を出るのが朝早い、または夜遅い">仕事のため家を出るのが朝早い、または夜遅い</option>
            <option value="仕事で家にいないが、休日は家にいる(またはインドア)">仕事で家にいないが、休日は家にいる(またはインドア)</option> 
            <option value="仕事のため家を出るのが朝早い、または夜遅い">仕事のため家を出るのが朝早い、または夜遅い</option>
            <option value="仕事で家にいるが、休日は外出が多い(またはアウトドア)">仕事で家にいるが、休日は外出が多い(またはアウトドア)</option>
            <option value="ほとんど家にいる">ほとんど家にいる</option>
            <option value="1、2日不在な日もある">1、2日不在な日もある</option>
            <option value="飼い主は不在だが、平日も休日も家に人がいる">飼い主は不在だが、平日も休日も家に人がいる</option>
          </select>
        </div> 
        
        <div class="select__search_box">
          <label class="select__search_label" for="friendly">触れ合い</label> 
          <select class="select__search_option" name="friendly" id="friendly">
            <option value="0">選択なし</option> 
            <option value="コミュニケーションが大事">コミュニケーションが大事</option> 
            <option value="お散歩必須">お散歩必須</option> 
            <option value="構いすぎ注意">構いすぎ注意</option> 
            <option value="お世話だけ、観賞で満足">お世話だけ、観賞で満足</option> 
            </select>
        </div> 
      </div>
      <div class="search__btn">
        <input class="submit" type="submit" name="search" value="検索" >
      </div>
    </form>
  </div>
</div>
@endsection

