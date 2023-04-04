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
<form method="POST" action="{{ route('dogs.update',$dog->id) }}">
    @csrf
    @method('PUT')

    <div>
      <div>
        <label>タイトル</label>
      </div>
      <div>
        <input type="text" name="name" value="{{old('name',$dog->name)}}">
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
        <textarea name="description" rows="4"> {{old('description',$dog->description)}}</textarea>
      </div>
      @error('description')
      <span>{{ $message }}</span>
      @enderror
    </div>

    <div>
      <div><label>画像</label></div>
      <div>
        <div>
          @if ($dog->image !=='')
          <img src="{{ Storage::url($dog->image) }}">
          @else
          @endif
        </div>
        <div>
          <input type="file" name="image">
        </div>
        @error('image')
        <span>{{ $message }}</span>
        @enderror
      </div>

    <button type="submit">更新</button>

  </form>
</body>
</html>