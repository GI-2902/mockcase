@extends('layouts.app')

    @section('css')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    @endsection
    @section('title')
    <title>商品一覧画面-ログイン後-</title>
    @endsection

    
    @section('content')
    <div class="toplist">
        <div class="toplist__tag">
            <div class="toplist__tag-reco">
                おすすめ
            </div>

            <div class="toplist__tag-mylist">
                マイリスト
            </div>
        </div>
    </div>

    <form action="/item" method=get>
        <div class="item">

            @foreach($items as $item)
            <div class="item__table">
                <div class="item__table__pic">
                    <img src="{{ asset('storage/image/'.$item->item_image) }}">
                </div>
                <div class="item__table__name">
                    <a href="{{ route('item',['item_id' => $item->item_id]) }}">{{ $item->item_name }} </a>
                </div>
            </div>
            @endforeach

        </div>
    </form>
    @endsection