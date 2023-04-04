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
            <ul>
                @foreach ($trainings as $training)
                <li ><a href="{{ route('trainings.show', $training->id) }}">{{ $training->trickname }}</a></li>
                @endforeach
            </ul>
        </table>
        <div class="displayflex">
        <div class="indexbuck usermainbtn">
            <button type="button" class="dogbtn dogbtnbuck wf-nicomoji" onClick="history.back()">もどる</button>
        </div>
        <div class="indexbuck usermainbtn">
            <button type="button" class="kanryoubtn dogbtn dogbtnbuck wf-nicomoji" onClick="history.back()" >すべてかんりょう</button>
        </div>
    </div>
    </div>
</body>

</html>