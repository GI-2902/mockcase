<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/item.css')}}">
    <title>商品詳細画面-ログイン後-</title>
</head>

<body>
    <header class="header">

        <div class="header__inner">
            <div class="header__inner__logo">
            </div>
            @Auth
            <div class="header__inner__text">
                <input type="text" value="   なにをお探しですか？">
            </div>
            <div class="header__inner__menu">
                <div class="header__inner__menu-logout">
                    <form action="/logout" method="post" class="header__inner__menu-logout-form">
                        @csrf
                        <input type="submit" value="ログアウト" />
                    </form>

                </div>
                <div class="header__inner__menu-mypage">
                    マイページ
                </div>
                <div class="header__inner__menu-listing">
                    <input type="submit" value="出品">
                </div>
            </div>
            @endauth
        </div>

    </header>


    <div class="product">

        <div class="product__img">
            <div class="product__img__pic">
                <img src="{{ asset('image/'.$item->item_image) }}" alt="">
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
                    ￥{{ $item->price }}(税込み)
                </div>
                



                <div class="product__area__title-action">

                  {{-- <form action="{{ route('post.like',$post->$item->item_id) }}" method="post">
                        @csrf
                        <button type="submit">●</button>
                    </form>
                    <span></span>--}}

                </div>


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
                    コメント({{----}})
                </div>
                <div class="product__comment-list">

                </div>
                <div class="product__comment-input">
                    <div class="product__comment-input-title">
                        商品へのコメント
                    </div>
                    <div class="product__comment-input-area">
                        <textarea name="" id=""></textarea>
                    </div>
                    <div class="product__comment-input-button">
                        <input type="submit" value="コメントを送信する">
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>