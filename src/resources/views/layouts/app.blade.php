<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    @yield('title')
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
                <form method="get" action="{{route('sell')}}" class="header__inner__menu-listing">
                    <input type="submit" value="出品">
                </form>
            </div>
            @endauth
        </div>
    </header>

    @yield('content')

</body>

</html>