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

                @php

                /*$user = auth()->user();
                $isLiked = $user && $user->likes->contains($post->id);*/

                @endphp
                

                <div class="product__area__title-action">

                    <form action="{{ route('item',$item->item_id) }}" method="post">
                        @csrf
                        <button type="submit">☆ <!-- $isLiked ? '★' : '☆'}} --></button>
                    </form>
                    <span> <!--  $item->likes()->count()}}--></span>

                </div>


            </div>
            <div class="product__buy">
                <div class="product__buy-button">
                    <input type="text" value="購入手続きへ" href="/item">
                </div>
            </div>
            <div class="product__descri">
                <div class="product__descri-title">
                    商品説明
                </div>
                <div class="product__descri-text">
                    内容
                </div>
            </div>
            <div class="product__info">
                <div class="product__info-title">
                    商品の情報
                </div>
                <div class="product__info-category">
                    カテゴリー
                </div>
                <div class="product__info-status">
                    商品の状態
                </div>
            </div>
            <div class="product__comment">
                <div class="product__comment-num">
                    コメント
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
                        <input type="text" value="コメントを送信する">
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>