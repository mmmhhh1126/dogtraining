<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者メニュー</title>
    <link href="{{asset('./css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
</head>
<body>

<div class="dashboad">
    <div class="dashboadtitle">
        <h2>管理者様メニュー</h2>
    </div>

    <div class="dashboadmain">
        <div class="dashboad-user dashboad-ustr">
            <a href="{{ url('/admin/userlist') }}" class="dashboad-a-user daut">ユーザー様一覧</a>
        </div>
        <div class="dashboad-training dashboad-ustr">
            <a href="{{ url('/training')}}" class="dashboad-a-training daut">トレーニング一覧</a>
        </div>
        
    <form method="POST" action="{{route('admin.logout')}}">
        @csrf

        <a class="adminlogout" href="{{ route('admin.logout')}}"
        onclick="event.preventDefault();this.closest('form').submit();">ログアウト</a>
    </form>
    </div>

  
</div>
</body>
</html>
