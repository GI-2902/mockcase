<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>商品一覧画面(トップ画面)</title>
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

</body>

</html>