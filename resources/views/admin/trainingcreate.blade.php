<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トレーニング作成画面</title>
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
</head>

<body>

    <div class="trainingcreate">
        <h2>トレーニング内容作成ページ</h2>
        <div class="trainingcreatebox">
            <form action="{{ route('form.submit') }}" method="post" class="trainingcreateform">
                @csrf

                <p> <label for="trickname">トリック名</label></p>
                <p><input type="text" class="trickname tnd tnf" name="trickname"></p>
                <P><label for="teach">教え方</label></P>
                <p><textarea class="teachdate thd tnf tnfh" name="teach"></textarea></p>
                <p><label for="why">教える理由</label></p>
                <p><textarea class="why_date wd tnf tnfh" name="why"></textarea></p>
                <button type="submit" class="btn-create"> {{ __('登録') }}</button>
            </form>
            <button type="button" class="btn-create" onClick="history.back()">トレーニング一覧へ戻る</button>
        </div>
        <div class="trainingcreatepic"></div>
    </div>

    <div class="adminmaingo">
        <button type="button" onClick="history.back()">リストに戻る</button>
    </div>

    </div>
</body>

</html>