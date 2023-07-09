<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
<main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>内容確認</h2>
      </div>
      <form class="form" action="/contacts" method="post">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="name" value="{{ $contact['name'] }}" readonly /></td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
              <div class="form-check form-check-inline">
               <input type="radio" name="gender" class="form-check-input" id="gender1" value="男性" {{ old ('gender', $menu->gender) == '男性' ? 'checked' : '' }}>
              <label for="gender1" class="form-check-label">男性</label>
              </div>
        <input type="radio" name="gender" class="form-check-input" id="gender2" value="女性" {{ old ('gender', $menu->gender) == '女性' ? 'checked' : '' }}>
        <label for="gender2" class="form-check-label">女性</label>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="text" name="email" value="{{ $contact['email'] }}" readonly /></td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">郵便番号</th>
              <td class="confirm-table__text">
                <input type="text" name="postcode" value="{{ $contact['postcode'] }}" readonly /></td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly /></td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building_name" value="{{ $contact['building_name'] }}" readonly /></td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">ご意見</th>
              <td class="confirm-table__text">
                <textarea name="textarea" cols="30" rows="3" value="{{ $contact['textarea'] }}" readonly ></textarea>
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
        <div class="form__revise">
          <button class="form__button-revise" type="submit">修正する</button>
      </form>
    </div>
  </main>
</body>