<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>犬登録画面</title>
    <link href="{{asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
</head>

<body>

    <div class="dog">
        <h2 class=" wf-nicomoji">いぬのとうろく</h2>
        <div class="dogbox">
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                <div><label for='image' class="dogtext dogtextpic wf-nicomoji">しゃしん</label></div>
                <div><input type="file" id="image" name="image" class="dogtextbox dogboxpic"></div>

                <p><label for="title" class="dogtext dogtextname wf-nicomoji">なまえ</label></p>
                <p><input type="text" id="title" name="title" class="dogtextbox dogboxname" /></p>

                <p><label for="description" class="dogtext dogtextdescription wf-nicomoji">memo<p>問題行動・疾患・特性等トレーニング時に注意しなければならない情報を入力してください</p></label></p>
                <p><textarea rows="4" id="description" name="description" class="dogtextbox dogboxmemo">{{old('description')}} </textarea> </p>

                <button type="submit" class="dogbtn wf-nicomoji">とうろく</button>
            </form>
        </div>
        <button type="button" class="dogbtn dogbtnbuck wf-nicomoji" onClick="history.back()">もどる</button>
    </div>
    <div class="dogpic"></div>

</body>

</html>