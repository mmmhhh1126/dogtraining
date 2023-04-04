    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ユーザートレーニング一覧</title>
        <link href="{{asset('css/style.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
    </head>

    <body>
        <div class="usertraining">
            <div class="usertrainingh2">
                <h2>トレーニング一覧</h2>
            </div>
            <table>
                @section('content')
                <h1>トレーニング一覧</h1>
                <ul>
                    @foreach ($trainings as $training)
                    <li><a href="{{ route('trainings.show', $training) }}">{{ $training->title }}</a></li>
                    @endforeach
                </ul>
                @endsection

            </table>
            <div class="indexbuck usermainbtn">
                <button type="button" class="dogbtn dogbtnbuck wf-nicomoji" onClick="history.back()">もどる</button>
            </div>
        </div>
    </body>

    </html>