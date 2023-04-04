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
            <h2>トレーニングリスト</h2>

            <table class="userlistbox">
                <tr class="userlisttop">
                    <th>トレーニングID</th>
                    <th>トリック名</th>
                    <th>内容確認・編集</th>
                    <th>削除</th>
                </tr>

                @foreach ($trainings as $training)
                <tr>
                    <td>{{ $training->id }}</td>
                    <td>{{ $training->trickname }}</td>
                    <td><a class="henshu" href="{{ route('trainings.edit', $training->id) }}">内容確認・編集</a></td>
                    <td>
                        <form action="{{ route('trainings.destroy', ['id' => $training->id]) }}" method="post">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="amtd" onclick="return confirm('本当に削除しますか？')">削除</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </table>
            <div class="tuika">
                <a href="{{ url('/admin/trainingcreate') }}">トレーニング追加</a>
            </div>
            <div class="adminmaingo tuika">
                <a href="{{ route('admin.dashboard')}}">メニューへ戻る</a>
            </div>
        </div>


    </div>
</body>

</html>