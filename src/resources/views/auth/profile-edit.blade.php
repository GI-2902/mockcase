<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/profile-edit.css')}}">

    <title>プロフィール設定画面(初回ログイン時)</title>
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

    <form action="/" class="profile" method="post">
        @csrf
        <div class="profile__form">

            <div class="profile__form__title">
                プロフィール設定
            </div>

            <div class="profile__form__icon">
                <div class="profile__form__icon__picture">
                    <div class="profile__form__icon__picture-img"></div>
                </div>
                <div class="profile__form__icon__file">
                    <div class="profile__form__icon__file-button">画像を選択する</div>
                </div>
            </div>

            <div class="profile__form__name">
                <div class="profile__form__name-tag">
                    ユーザー名
                </div>
                <div class="profile__form__name-text">
                    <input type="text" name="name" value="{{ old('name') }}" />
                </div>
            </div>


            <div class="profile__form__post">
                <div class="profile__form__post-tag">
                    郵便番号
                </div>
                <div class="profile__form__post-text">
                    <input type="text" name="postcode" value="{{ old('postcode') }}" pattarn="">
                </div>
            </div>
            <div class="profile__form__address">
                <div class="profile__form__address-tag">
                    住所
                </div>
                <div class="profile__form__address-text">
                    <input type="text" name="address" value="{{ old('address') }}" />
                </div>
            </div>
            <div class="profile__form__building">
                <div class="profile__form__building-tag">
                    建物名
                </div>
                <div class="profile__form__building-text">
                    <input type="text" name="building" value="{{ old('building') }}" />
                </div>
            </div>
        </div>
        <div class="profile__button">
            <input type="submit" value="更新する">
        </div>
    </form>
</body>

</html>