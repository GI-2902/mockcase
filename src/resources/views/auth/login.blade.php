<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    <title>Document</title>
</head>

<body>
    <header class="header">

        <div class="header__inner">
            <div class="header__inner__logo">
            </div>
        </div>

    </header>

    <form action="/login" class="" method="post">
        @csrf
        <div class="form">

            <div class="form__group">
                <h1>ログイン</h1>
            </div>

            <div class="form__group">
                <div class="form__group__mail">
                    <div class="form__group__mail-label">
                        メールアドレス
                    </div>
                    <div class="form__group__mail-text">
                        <input type="email" name="email" value="{{old('email')}}"/>
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group__pass">
                    <div class="form__group__pass-label">
                        パスワード
                    </div>
                    <div class="form__group__pass-text">
                        <input type="password" name="password" />
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group__button">
                    <input type="submit" value="ログインする" />
                </div>
            </div>

            <div class="form__group">
                <div class="form__group__register">

                    <a href="/register">会員登録はこちら</a>

                </div>
            </div>
        </div>

    </form>
</body>

</html>