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
                <div class="dog1">
                    <form action="" method="">
                        <div class="rem">@if ($post->image !=='')<img class="inugazou" src="{{ asset('storage/' . $post->image) }}">
                            @else @endif</div>
                        <div class="rem"><a class="dnone" href="{{ route('trainings.user', ['post_id' => $post->id]) }}">{{ $post->title }}<span>→</span></a></div>
                        <div class="rem">{!! nl2br( htmlspecialchars($post->description) ) !!}</div>
                    </form>
                    <div class="kanryoubtnbtn">
                        <a href="{{ route('posts.show', $post->id) }}" class="kanryoubtn wf-nicomoji">すべてかんりょう</a>
                    </div>
                    <div>
                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST" onsubmit="return confirm('削除してもよろしいですか？');">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="iidb" type="submit">delete</button>
                        </form>
                    </div>
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