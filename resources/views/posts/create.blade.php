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
  <div class="dog">
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
      @csrf
      <h2 class=" wf-nicomoji">いぬのとうろく</h2>
      <div class="dogbox">
        <div>
          <div class="mb1">
            <label class="dn wf-nicomoji">おなまえ</label>
          </div>
          <div>
            <input type="text" name="title" value="{{old('title')}}" class="wt nwt">
          </div>
          @error('title')
          <span>{{ $message }}</span>
          @enderror
        </div>

        <div class="m5">
          <div class="mb1">
            <label class="wf-nicomoji dn">memo</label>
          </div>
          <div>
            <textarea name="description" rows="4" class="wt"> {{old('description')}}</textarea>
            <p class="chuushaku">・犬の性格や問題行動・アレルギー等トレーニングする際に気を付ける事をメモしておきましょう</p>
          </div>
          @error('description')
          <span>{{ $message }}</span>
          @enderror
        </div>

        <div>
          <div><label class=" wf-nicomoji dn">しゃしん</label></div>
          <div>
            <input type="file" name="image" class="file">
          </div>
          @error('image')
          <span>{{ $message }}</span>
          @enderror
        </div>

        <button type="submit" class="dogbtn wf-nicomoji">わんちゃんのとうろく</button>
      </div>
    </form>
    <div class="dmbb">
      <button type="button" class="dmb dogbtn  wf-nicomoji" onClick="history.back()">もどる</button>
    </div>
  </div>
  <div class="dogpic"></div>
</body>

</html>