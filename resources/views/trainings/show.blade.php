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
  <div class="dogshow">
    <div class="showtitle">
      <h1>{{ $training->trickname }}</h1>
    </div>
    <div class="osiekata bs">
      <h2>教え方</h2>
      <p>{{ $training->teach }}</p>
    </div>
    <div class="sukima"></div>
    <div class="osieruriyuu bs">
      <h2>教える理由</h2>
      <p>{{ $training->why }}</p>
    </div>
    <button type="button" class="dogbtn dogbtnbuck wf-nicomoji" onClick="history.back()">いちらんにもどる</button>
  </div>
</body>

</html>