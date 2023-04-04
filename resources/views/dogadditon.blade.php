<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犬切り替え</title>
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
</head>

<body>
    <div class="dogtuika">
        <table class="doglistbox">

            @foreach ($dogs as $dog)

            <tr>
                <form action="" method="">
                    <td>{{ $dog->image }}</td>
                    <td>{{ $dog->name }}</td>
                </form>
                <td>
                    <form action="{{ route('dogs.destroy', ['id' => $dog->id]) }}" method="post">

                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
                    </form>
                </td>
                <td>
                <a href="{{ url('/show') }}">トレーニング一覧を表示する</a>
                </td>
            </tr>
            @endforeach

        </table>

    </div>
    <div class="dogfoter">
        <div class="tuika">
            <a href="{{ url('/dog') }}">ペットの追加</a>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="tuika">
                <button type="submit" >
                    {{ __('Log Out') }}
                </button>
            </div>
        </form>
    </div>

</body>

</html>