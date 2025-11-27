@extends('layouts.app')

    @section('css')
    <link rel="stylesheet" href="{{asset('css/item.css')}}">
    @endsection
    @section('title')
    <title>商品詳細画面-ログイン後-</title>
    @endsection

    @section('content')
    <div class="product">

        <div class="product__img">
            <div class="product__img__pic">
                <img src="{{ asset('storage/image/'.$item->item_image) }}" alt="">
            </div>
        </div>

        <div class="product__area">

            <div class="product__area__title">
                <div class="product__area__title-name">
                    {{ $item->item_name }}
                </div>
                <div class="product__area__title-bland">
                    {{ $item->brand }}
                </div>
                <div class="product__area__title-price">
                    ￥{{ $item->price }}(税込)
                </div>
                
                <form action="{{'/like/'.$item->item_id }}" method="post" class="product__area__title-form">
                        @csrf
                        <div class="product__area__title-form-like">
                            <button type="submit" class="product__area__title-form-like-button">
                                <img src="{{ $check_like ? asset('storage/image/heart.jpg') : asset('storage/image/nonheart.jpg')}}" alt="">
                            </button>
                            <a class="product__area__title-form-like-count">{{$like_count}}</a>
                        </div>

                        <div class="product__area__title-form-comment">
                            <div class="product__area__title-form-comment-button">
                                <img src="{{ $check_comment ? asset('storage/image/comment.jpg') : asset('storage/image/noncomment.jpg')}}" alt="">
                            </div>
                            <a class="product__area__title-form-comment-count">{{$comment_count}}</a>
                        </div>
                        
                </form>
            </div>

            <div class="product__buy">
                <div class="product__buy-button">
                
                        <a href="{{ route('buy',['item_id' => $item->item_id])}}"  class="product__buy-button-tag">購入手続きへ</a>
                    
                </div>
            </div>
            <div class="product__descri">
                <div class="product__descri-title">
                    商品説明
                </div>
                <div class="product__descri-text">
                    {{ $item->description }}
                </div>
            </div>
            <div class="product__info">
                <div class="product__info-title">
                    商品の情報
                </div>
                <div class="product__info-category">
                    <div class="product__info-category-title">
                          カテゴリー  
                    </div>
                    <div class="product__info-category-text">
                         {{ $item->category}}
                    </div>      
                </div>
                <div class="product__info-status">
                   <div class="product__info-status-title">
                        商品の状態 
                   </div>
                   <div class="product__info-status-text">
                         {{ $item->status}}
                   </div>       
                </div>
            </div>
            <div class="product__comment">
                <div class="product__comment-num">
                    コメント{{'('.$comment_count.')'}}
                </div>
                <div class="product__comment-user">


                    @foreach($comments as $comment)
                    <div class="product__comment-user-info">
                        <div class="product__comment-user-info-img">
                            <img src="{{asset('storage/image/'.$comment->user_image)}}" class="product__comment-user-info-img-pic" alt="">
                        </div>
                        <div class="product__comment-user-info-name">
                            {{ $comment->user_name }}
                        </div>
                    </div>
                    <div class="product__comment-user-comment">
                        <input type="text" value="{{ $comment->comment }}" class="product__comment-user-comment-text">
                    </div>
                    @endforeach



                </div>
                <div class="product__comment-input">
                    <div class="product__comment-input-title">
                        商品へのコメント
                    </div>

                    <form action="{{'/comment/'.$item->item_id }}" method="post" class="product__comment-input-form">
                        @csrf
                        <textarea name="come" class="product__comment-input-form-text">{{$item->comment}}</textarea>

                        <input type="submit" value="コメントを送信する" class="product__comment-input-form-button">
                        
                    </form>                    
                </div>
            </div>
        </div>

    </div>
    @endsection


