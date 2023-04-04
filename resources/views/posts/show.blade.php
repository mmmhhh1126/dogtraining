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
  <div>
    <label for="title">なまえ</label>
    <p>{{old('title',$post->title)}}</p>
  </div>

  <div>
    <label for="description">問題行動</label>
    <p>{{old('description',$post->description)}}</p>
  </div>

  <button onclick="location.href='{{ route('posts.index') }}'">戻る</button>
</body>

</html>

<div>