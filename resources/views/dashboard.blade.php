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


            @foreach ($posts as $post)
            <tr>
                <form action="" method="">
                    <td>@if ($post->image !=='')<img src="{{ asset('storage/' . $post->image) }}" width="50%">
                        @else @endif</td>
                    <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                    <td>{!! nl2br( htmlspecialchars($post->description) ) !!}</td>
                </form>
                <td>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST" onsubmit="return confirm('削除してもよろしいですか？');">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit">削除</button>
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
            <a onclick="location.href='{{ route('posts.create') }}'">ペットの追加</a>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="tuika">
                <button type="submit">
                    {{ __('Log Out') }}
                </button>
            </div>
        </form>
    </div>

</body>

</html>