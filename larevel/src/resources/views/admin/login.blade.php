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
  <header>
    FashionablyLate
    <a href="{{ route('register') }}?v={{ time() }}" class="register-link">register</a>
  </header>
  <main>
    <h2>Login</h2>

    <div class="form">
      <form method="POST" action="/login" autocomplete="off">
        @csrf
        <input type="hidden" name="prevent_cache" value="{{ time() }}">
        <div class="form__label">
          <label>メールアドレス</label>
        </div>
        <div class="form__input">
          <input type="text" name="email" placeholder="例：test@example.com" class="form__input--text" value="{{ old('email') }}">
          @error('email')
            <div class="error">{{ $message }}</div>
          @enderror
        </div>

        <div class="form__label">
          <label>パスワード</label>
        </div>
        <div class="form__input">
          <input type="text" name="password" placeholder="例：coachtech1106" class="form__input--text">
          @error('password')
            <div class="error">{{ $message }}</div>
          @enderror
        </div>

        <div class="form__btn">
          <button type="submit">ログイン</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
