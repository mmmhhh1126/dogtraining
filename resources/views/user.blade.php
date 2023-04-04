<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザースタート画面</title>
    <link href="{{asset('./css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
</head>

<body>

    <div class="usermain">
        <div class="userstarmainbox">

            <div class="usermaintitle wf-nicomoji">
                <h2>スタート</h2>
            </div>
            <div class="usermainbtn wf-nicomoji">
                <a href="{{ route('login') }}" class="userlogin">ログイン</a>
            </div>
            <div class="usermainbtn wf-nicomoji">
                <a href="" class="notuser">ログインせずにつかう</a>
            </div>
            <div class="usermainbtn wf-nicomoji">
                <a href="{{ route('register') }}" class="firstuser">はじめて</a>
            </div>




            <div class="indexbuck usermainbtn">
                <a href="{{ url('/') }}" class="indexbuckbtn wf-nicomoji">もどる</a>
            </div>
            
        </div>
    </div>
</body>

</html>