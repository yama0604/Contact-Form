<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="{{ asset('css/contact/contactForm.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
  <div class="container">
    <header>
      FashionablyLate
    </header>
    <main>
      <h2>Contact</h2>
      <form action="/confirm" method="post">
        @csrf
        <div class="form__row">
          <label>お名前<span class="required">※</span></label>
          <div class="form__row--group">
            <div class="form__name--group">
              <div class="form__last--name">
                <input type="text" name="last_name" placeholder="例：山田" class="form__row--input2" value="{{ old('last_name') }}">
                @error('last_name') <div class="error">{{ $message }}</div> @enderror
              </div>
              <div class="form__first--name">
                <input type="text" name="first_name" placeholder="例：太郎" class="form__row--input2" value="{{ old('first_name') }}">
                @error('first_name') <div class="error">{{ $message }}</div> @enderror
              </div>
            </div>
          </div>
        </div>

        <div class="form__row">
          <label>性別<span class="required">※</span></label>
          <div class="form__row--group">
            <div class="form__radio--group">
              @php $oldGender = old('gender'); @endphp
                <input type="radio" name="gender" value="男性" class="form__row--radio" {{ $oldGender === '男性' || $oldGender === null ? 'checked' : '' }}> 男性
                <input type="radio" name="gender" value="女性" class="form__row--radio" {{ $oldGender === '女性' ? 'checked' : '' }}> 女性
                <input type="radio" name="gender" value="その他" class="form__row--radio" {{ $oldGender === 'その他' ? 'checked' : '' }}> その他
              @error('gender') <div class="error">{{ $message }}</div> @enderror
            </div>
          </div>
        </div>

        <div class="form__row">
          <label>メールアドレス<span class="required">※</span></label>
          <div class="form__row--group">
            <input type="text" name="email" placeholder="例:test@example.com" class="form__row--input1" value="{{ old('email') }}">
            @error('email') <div class="error">{{ $message }}</div> @enderror
          </div>
        </div>

        <div class="form__row">
          <label>電話番号<span class="required">※</span></label>
          <div class="form__row--group">
            <div class="form__tel--group">
              <input type="text" name="tel1" placeholder="080" class="form__row--input3" value="{{ old('tel1') }}">-
              <input type="text" name="tel2" placeholder="1234" class="form__row--input3" value="{{ old('tel2') }}">-
              <input type="text" name="tel3" placeholder="5678" class="form__row--input3" value="{{ old('tel3') }}">
            </div>
              @error('tel1') <div class="error">{{ $message }}</div> @enderror
          </div>
        </div>

        <div class="form__row">
          <label>住所<span class="required">※</span></label>
          <div class="form__row--group">
            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" class="form__row--input1" value="{{ old('address') }}">
            @error('address') <div class="error">{{ $message }}</div> @enderror
          </div>
        </div>

        <div class="form__row">
          <label>建物名</label>
          <div class="form__row--group">
            <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" class="form__row--input1" value="{{ old('building') }}">
          </div>
        </div>

        <div class="form__row">
          <label>お問い合わせの種類<span class="required">※</span></label>
          <div class="form__row--group">
            <select name="inquiry_type" class="form__row--select" >
              <option value="">選択してください</option>
              @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('inquiry_type') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
              @endforeach
            </select>
            @error('inquiry_type') <div class="error">{{ $message }}</div> @enderror
          </div>
        </div>

        <div class="form__row">
          <label class="form-row--label">お問い合わせ内容<span class="required">※</span></label>
          <div class="form__row--group">
            <textarea name="inquiry" placeholder="お問い合わせ内容をご記入ください" class="form__row--input1">{{ old('inquiry') }}</textarea>
            @error('inquiry') <div class="error">{{ $message }}</div> @enderror
          </div>
        </div>

        <div class="form__row--btn">
          <button type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>