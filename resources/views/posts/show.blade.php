<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表彰状</title>
    <link href="{{asset('./css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet" />
</head>

<body>

    <div class="complete">
        <div class="completeimg">
            <img src="{{ asset('img\表彰状.jpg') }}" alt="">
            <div class="name">
                <p>{{ $post->title }}</p>
            </div>
            <div class="honbun">
                <p class="">優良家庭犬項目習得</p>
                    <p>あなたは本アプリにおいて、<br>
                    頭書の芸を習得されました。<br>
                        あなたは人と動物の共生の<br>
                        模範となっております。<br>
                        よってその功績をここに賞します。<br>
                    </p>
                    <p>ドッグトレーニングアプリ　🐶</p>
            </div>
        </div>
        <div class="indexbuck usermainbtn">
                <button type="button" class="dogbtn dogbtnbuck wf-nicomoji" onClick="history.back()">もどる</button>
            </div>
    </div>

</body>

</html>