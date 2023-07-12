@extends('common.layout')

@push('css')
    <link href="{{ asset('css/list.css') }}" rel="stylesheet">
@endpush

@section('content')
  <div class="list__container">
    <h1 class="list__title">検索結果</h1>
    <div class="list__contents">
      @foreach($contents as $content)
      <form class="list__box">
        @csrf
        <div class="list__box_inner">
          <input type="hidden" value="{{ $user_id }}" name="user_id">
          <input type="hidden" value="{{ $content->id }}" name="contents_id">
          <p class="list__box_inner-title">{{ $content->category }}</p>
          <div class="list__box_inner-flex">
            <div>
              <img class="list__box_inner-img" src="images/{{$content->img}}" alt="検索結果の写真">
            </div>
            <div class="list__box_detail">
              <dl class="list__box_detail-data">
                <dt>家族形態</dt>
                <dd class="list__box_dd">{{ $content->home_data }}</dd>
              </dl>
              <dl class="list__box_detail-data">
                <dt>ライフスタイル</dt>
                <dd class="list__box_dd">{{ $content->life_style }}</dd> 
              </dl>
              <dl class="list__box_detail-data last-data">
                <dt>触れ合い</dt>
                <dd class="list__box_dd">{{ $content->friendly }}</dd>
              </dl>
              <div class="list__box_btn">
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

