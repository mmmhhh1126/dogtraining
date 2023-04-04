<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
    <title>共通スタート</title>
</head>

<body>
    <div class="index-top">
        <div class="index-top-text wf-nicomoji">
            <h2>ドッグトレーニングアプリ</h2>
        </div>
    </div>

    <div class="index-center">
        <div class="index-left">
            <div class="index-center-a ica wf-nicomoji">
                <a href="{{ url('/admin/login') }}">かんりしゃページへ</a>
            </div>
            <div class="index-center-text">
                <p>現役のドッグトレーナーが管理者となり<br>トレーニングの内容を更新致します。</p>
            </div>
        </div>
        <div class="index-right">
            <div class="index-center-a icb wf-nicomoji">
                <a href="{{ url('/user') }}">ゆーざーページへ</a>
            </div>
            <div class="index-center-text">
                <p>"正しいしつけ"やそのしつけの"必要性"を手軽にアプリで学べます。</p>
            </div>
        </div>
    </div>

    <div class="index-bottom">
        <h1>犬のしつけって必要？</h1>
        <p>あなたの愛犬は"おすわり"ができますか？そのおすわりは正しいおすわりですか？<br>おすわりは本来「停座」と言い、人の指示で犬はその場で地面におしりをつけ指示を出した人からの解放の合図が無い限りは動かず待ち続けることを言います。<br>これは車の多い道を歩く散歩等で愛犬を守り、カフェなどで他のお客さんに迷惑をかけないための重要なしつけです。<br>しつけは強制ではなく私たちが犬と共生するためにあるものです。</p>
    </div>

</body>

</html>