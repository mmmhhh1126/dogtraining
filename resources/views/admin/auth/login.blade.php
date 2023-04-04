<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
    <title>管理者用スタート</title>
</head>

<body>
    <div class="admin">
        <div class="admin-title logintext wf-nicomoji">
            <h2>かんりしゃスタート</h2>
        </div>

        <div class="login">
            <div class="adminbox">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <p><label for="email" class="loginemail wf-nicomoji">メールアドレス</label></p>
                        <p><input id="email" class="logintextbox logintextboxa" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" /></p>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <p><label for="password" class="loginpassword wf-nicomoji">パスワード</label></p>

                        <p><input id="password" class="logintextbox" type="password" name="password" required autocomplete="current-password" /></p>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="logindisplayblock">
                        <label for="remember_me" class="loginpass">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="passsave">パスワードを保存</span>
                        </label>
                    </div>
                    <div class="loginbtnpass">
                       <p> <button class="loginbtn">
                            {{ __('ログイン') }}
                        </button></p>


                        @if (Route::has('admin.password.request'))
                       <p> <a class="loginpassrisset" href="{{ route('password.request') }}">
                            {{ __('パスワードを忘れた方はこちら') }}
                        </a></p>
                        @endif
                    </div>
                </form>
            </div>

        </div>

        <div class="admin-signup logintext wf-nicomoji">
            <a href="{{ route('admin.register') }}">しんきとうろく</a>
           
        </div>
        <div class="admin-signup logintext wf-nicomoji">
            <a href="{{ url('/') }}">スタート</a>
           
        </div>
    </div>
    <div class="adminpic">
    </div>
</body>

</html>