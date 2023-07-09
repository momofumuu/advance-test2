<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advancetest</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
          <span class="form__label--item">お名前</span>
          <span class="form__label--attention">※</span>
          </div>
          <div class="form__group-content">
          <div class="form__input--name">
            <input type="text" name="name"  /><br><span  class="form__input--example">例）山田</span>
            <input type="text" name="name" /><br><span class="form__input--example">例）太郎</span>
          </div>
         <div class="form__error">
          <!--バリデーション機能を実装したら記述。-->
         </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">性別</span>
          <span class="form__label--attention">※</span>
        </div>
        <div class="form__group-content">
          <div class="form-check form-check-inline">
          <input type="radio" name="gender" class="form-check-input" id="gender1" value="男性" {{ old ('gender') == '男性' ? 'checked' : '' }} checked>
          <label for="gender1" class="form-check-label">男性</label>
          <input type="radio" name="gender" class="form-check-input" id="gender2" value="女性" {{ old ('gender') == '女性' ? 'checked' : '' }}>
          <label for="gender2" class="form-check-label">女性</label>
        </div>
        </div>
          <div class="form__error">
             <!--バリデーション機能を実装したら記述。-->
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span><span class="form__label--attention">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
                <input type="email" name="email" /><br><span class="form__input--example">例）test@example.com</span>
          </div>
          <div class="form__error">
             <!--バリデーション機能を実装したら記述。-->
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">郵便番号</span><span class="form__label--attention">※</span>
          <span class="form__label--item">〒</span>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="postcode" name="postcode" /><br><span class="form__input--example">例）123-4567</span>
            </div>
            <div class="form__error">
             <!--バリデーション機能を実装したら記述。-->
            </div>
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">住所</span><span class="form__label--attention">※</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="address" name="address" /><br><span class="form__input--example">例）東京都渋谷区千駄ヶ谷123</span>
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述。-->
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">建物名</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="building_name" name="building_name" /><br><span class="form__input--example">例）千駄ヶ谷マンション101</span>
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述。-->
          </div>
        </div>
      </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span><span class="form__label--attention">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="opinion"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述。-->
        </div>
      </form>
    </div>
  </main>



</html>