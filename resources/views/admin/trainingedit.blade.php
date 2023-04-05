<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トレーニング内容編集</title>
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
</head>

<body>
    <div class="trainingedit">
        <h2>トレーニング内容編集</h2>
        <div class="trainingeditinner">
            <form method="POST" action="{{ route('trainings.update',$training->id) }}">
                @csrf
                @method('PUT')
                <div class="trainingeditbox">
                    <p><label for="trickname">トリック名</label></p>
                    <p> <input type="text" name="trickname" id="trickname" class="te" value="{{ $training->trickname }}" required></p>
                </div>
                <div class="trainingeditbox">
                    <p> <label for="teach">教え方</label></p>
                    <p> <input type="text" name="teach" id="teach" class="te" value="{{ $training->teach }}" required></p>
                </div>
                <div class="trainingeditbox">
                    <p> <label for="why">教える理由</label></p>
                    <p> <input type="text" name="why" id="why" class="te" value="{{ $training->why }}" required></p>
                </div>
                <div class="trainingeditbox">
                    <button type="submit" class="tebtn">更新</button>
                </div>
            </form>
            <div class="adminmaingo">
                <button type="button" onClick="history.back()">リストに戻る</button>
            </div>
        </div>
    </div>
    <div class="tepic">
        
    </div>

</body>

</html>