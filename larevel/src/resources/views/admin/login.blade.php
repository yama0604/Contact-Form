<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
  <header>FashionablyLate</header>
  <main>
    <h2>Login</h2>
    <div class="error">
      @if (count($errors) > 0)
        <p>入力に問題があります</p>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      @endif
    </div>
    <div class="form">
      <form action="/loginFnc" method="post">
        @csrf
        <div class="form__label">
          <label>メールアドレス</label>
        </div>
        <div class="form__input">
          <input type="text" name="email" placeholder="例：test@expample.com" class="form__input--text"  value="{{ old('email') }}" >
        </div>
        <div class="form__label">
          <label>パスワード</label>
        </div>
        <div class="form__input">
          <input type="text" name="password" placeholder="例：coachtech1106" class="form__input--text">
        </div>
        <div class="form__btn">
          <button type="submit">ログイン</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>