<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/register.css')}}">

    <title>会員登録画面</title>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__inner-logo"></div>
        </div>
    </header>

    <form action="/register" class="form" method="post">
        @csrf
        <div class="register__form">

            <div class="register__form__title">
                会員登録</div>

            <div class="register__form__name">
                <div class="register__form__name-tag">
                    ユーザー名
                </div>
                <div class="register__form__name-text">
                    <input type="text" name="name" value="{{ old('name') }}" />
                </div>
            </div>


            <div class="register__form__email">
                <div class="register__form__email-tag">
                    メールアドレス
                </div>
                <div class="register__form__email-text">
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="register__form__pass">
                <div class="register__form__pass-tag">
                    パスワード
                </div>
                <div class="register__form__pass-text">
                    <input type="password" name="password" />
                </div>
            </div>
            <div class="register__form__confirm">
                <div class="register__form__confirm-tag">
                    確認用パスワード
                </div>
                <div class="register__form__confirm-text">
                    <input type="password" name="password_confirmation" />
                </div>
            </div>
        </div>
        <div class="register__button">
            <input type="submit" value="登録する">
        </div>
        <div class="register__tologin">
            <a href="/login" class="register__tologin-link">ログインはこちら</a>
        </div>
    </form>
</body>

</html>