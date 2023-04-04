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
<form method="POST" action="{{ route('dogs.store') }}" enctype="multipart/form-data">
    @csrf

    <div>
      <div>
        <label>タイトル</label>
      </div>
      <div>
        <input type="text" name="name" value="{{old('name')}}">
      </div>
      @error('name')
      <span>{{ $message }}</span>
      @enderror
    </div>

    <div>
      <div>
        <label>本文</label>
      </div>
      <div>
        <textarea name="description" rows="4"> {{old('description')}}</textarea>
      </div>
      @error('description')
      <span>{{ $message }}</span>
      @enderror
    </div>

    <div>
        <label>誕生日</label>
      </div>
    <div>
        <input name="brthday" type="date"> {{old('brthday')}}</input>
      </div>
      <span>{{ $brthday }}</span>
    </div>

    <div>
      <div><label>画像</label></div>
      <div>
        <input type="file" name="image">
      </div>
      @error('image')
      <span>{{ $message }}</span>
      @enderror
    </div>

    <button type="submit">保存</button>

  </form>
</body>
</html>