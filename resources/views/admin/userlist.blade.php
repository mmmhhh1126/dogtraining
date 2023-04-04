<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
</head>

<body>
    <div class="userlistout">
        <div class="userlist">
            <h2>ユーザーリスト</h2>

            <table class="userlistbox">
                <tr class="userlisttop">
                    <th>ユーザーID</th>
                    <th>なまえ</th>
                    <th>メールアドレス</th>
                    <th>ユーザー削除</th>
                </tr>
                @foreach ($users as $user)
                <tr>

                    <th>{{ $user->id}}</th>
                    <th>{{ $user->name }}</th>
                    <th>{{ $user->email}}</th>

                    <td>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('本当に削除しますか？')">削除</button>
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif

                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

            <div class="adminmaingo  tuika">
                <a href="{{ route('admin.dashboard')}}">メニューへ戻る</a>
            </div>
        </div>
    </div>
</body>

</html>