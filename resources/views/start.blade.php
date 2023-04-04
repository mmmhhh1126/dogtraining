<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
    <title>ユーザースタート画面</title>
    
</head>

<body>

    <div class="userstart">
        <div class="userstartBox">
            <div class="user wf-nicomoji userstart-a">
                <a href="{{ route('login') }}">ログイン</a>
            </div> 
            <div class="firstuser wf-nicomoji userstart-a">
                <a href="">はじめて</a>
            </div>
        </div>
    </div>

</body>

</html>