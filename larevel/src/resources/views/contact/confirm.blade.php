<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirm</title>
    <link rel="stylesheet" href="{{ asset('css/contact/confirm.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
  <header>FashionablyLate</header>
  <main>
    <h2>Confirm</h2>
    <form action="/thanks" method="post">
      @csrf
      <table>
          <tr>
            <th>お名前</th>
            <td>
              <?php print_r($contact['last_name']) ?>　
              <?php print_r($contact['first_name']) ?>
              <input type="hidden" name="last_name"  size=auto value="{{ $contact['last_name'] }}" readonly />
              <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}" readonly />
            </td>
          </tr>
          <tr>
            <th>性別</th>
            <td><input type="text" name="gender" value="{{ $contact['gender'] }}" readonly /></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><input type="text" name="email" value="{{ $contact['email'] }}" readonly /></td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>
              <input type="text" name="tel1"  size="5" value="{{ $contact['tel1'] }}" readonly />　-　
              <input type="text" name="tel2"  size="5" value="{{ $contact['tel2'] }}" readonly />　-　
              <input type="text" name="tel3"  size="5" value="{{ $contact['tel3'] }}" readonly />
            </td>
          </tr>
          <tr>
            <th>住所</th>
            <td><input type="text" name="address" value="{{ $contact['address'] }}" readonly /></td>
          </tr>
          <tr>
            <th>建物名</th>
            <td><input type="text" name="building" value="{{ $contact['building'] }}" readonly /></td>
          </tr>
          <tr>
            <th>お問い合わせの種類</th>
            <td><input type="text" name="inquiry_type" value="{{ $contact['inquiry_type'] }}" readonly /></td>
          </tr>
          <tr>
            <th>お問い合わせ内容</th>
            <td><input type="text" name="inquiry" value="{{ $contact['inquiry'] }}" readonly /></td>
          </tr>
      </table>
      <div class="form__btn">
        <button type="submit" class="form__btn--send">送信</button>
        <button type="button" onClick="history.back()" class="form__btn--rtn">修正</button>
      </div>
    </form>
  </main>
</body>
</html>