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
          <div>
            <label class=" wf-nicomoji">なまえ</label>
          </div>
          <div>
            <input type="text" name="title" value="{{old('title')}}">
          </div>
          @error('title')
          <span>{{ $message }}</span>
          @enderror
        </div>

        <div>
          <div>
            <label class="wf-nicomoji">memo</label>
          </div>
          <div>
            <textarea name="description" rows="4"> {{old('description')}}</textarea>
          </div>
          @error('description')
          <span>{{ $message }}</span>
          @enderror
        </div>

        <div>
          <div><label class=" wf-nicomoji">しゃしん</label></div>
          <div>
            <input type="file" name="image">
          </div>
          @error('image')
          <span>{{ $message }}</span>
          @enderror
        </div>

        <button type="submit" class="dogbtn wf-nicomoji">とうろく</button>
      </div>
    </form>
    <button type="button" class="dogbtn dogbtnbuck wf-nicomoji" onClick="history.back()">もどる</button>
  </div>
  <div class="dogpic"></div>
</body>

</html>