<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アカウント登録</title>
    <link rel="stylesheet" href="{{ asset('css/admin/register.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>

<body>
  <header>
    FashionablyLate
    <a href="/login" class="login-link">login</a>
  </header>
  <main>
    <h2>Register</h2>
    <div class="form">
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form__label">
          <label>お名前</label>
        </div>
        <div class="form__input">
          <input type="text" name="name" placeholder="例：山田 太郎" class="form__input--text" value="{{ old('name') }}">
          @error('name')
            <div class="error">{{ $message }}</div>
          @enderror
        </div>

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
          <input type="text" name="password" placeholder="例：coachtech1106" class="form__input--text" value="{{ old('password') }}">
          @error('password')
            <div class="error">{{ $message }}</div>
          @enderror
        </div>

        <div class="form__btn">
          <button type="submit">登録</button>
        </div>

      </form>
    </div>
  </main>
</body>
</html>
