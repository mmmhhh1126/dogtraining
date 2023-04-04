<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('./css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
    <title>ユーザー新規登録画面</title>
</head>
</head>

<body>
    <div class="adminregister">

        <div class="registertitle wf-nicomoji">
            <h2>しんきとうろく</h2>
        </div>


        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="regiter">
                <!-- Name -->
                <div>
                    <p><label for="name" class="loginemail wf-nicomoji">なまえ</label></P>
                    <p><input id="name" class="logintextbox" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                    <p>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <!-- Email Address -->
                <div class="mt-4">
                    <p><label for="email" class="loginemail wf-nicomoji">メールアドレス</label></p>
                    <p><input id="email" class="logintextbox" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <p><label for="password" class="loginemail wf-nicomoji">パスワード</label></p>

                    <p><x-text-input id="password" class="logintextbox" type="password" name="password" required autocomplete="new-password" /></p>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <p><label for="password_confirmation" class="loginemail wf-nicomoji">パスワードかくにん</label></p>
                    <p><input id="password_confirmation" class="logintextbox" type="password" name="password_confirmation" required autocomplete="new-password" /></p>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="registerbtnout">
                    <button class="registerbtn">
                        {{ __('登録') }}
                    </button>
                </div>
                <div class="alreadyregister">
                    <a class="alreadyregistera" href="{{ route('login') }}">
                        {{ __('既に登録していますか?') }}
                    </a>
                </div>
            </div>
        </form>

        <div class="registertext">
            <p>犬のしつけ方法は何パターンもあり、今から学習していく中には説明の通りに教えても犬に上手く伝わらない可能性があります。<br>そのためにプロのドッグトレーナーがいます。<br>プロは犬の性格や体格・犬との信頼関係によってしつけの方法を変えます。<br>しつけに迷った際はお近くのドッグトレーナー・犬の訓練士をお訪ね下さい。</p>
        </div>
    </div>
</body>

</html>