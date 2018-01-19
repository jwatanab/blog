<div class="main">
    <div class="main_title">Sumare sore</div>
    <div class="login">Login || Registr</div>
  </div>
<div class="bg">
    <div class="login_form">
      <div class="captions">ユーザ登録</div>
      <form action="/api/add" method="post">
        <div class="email">メールアドレス</div>
        <input type="text" name="email" class="dis" placeholder="Email" />
        <div class="password">パスワード</div>
        <input type="password" name="password" class="dis" placeholder="Password" />
        <button class="submit_btn">送信</button>
      </form>
    </div>
  </div>
  <!-- <= $this->Html->???を使えるようにする ?> -->
  <div class="container">
    <div class="bg">
      <div class="login_form">
        <div class="captions">ログイン</div>
        <form action="/api/login" method="post">
          <div class="email">メールアドレス</div>
          <input type="text" name="email" class="dis" placeholder="Email" />
          <div class="password">パスワード</div>
          <input type="password" name="password" class="dis" placeholder="Password" />
          <button class="submit_btn">送信</button>
        </form>
      </div>
    </div>
    <div class="animation">
      <a href="/api/logout" class="shape"></a>
    </div>
  </div>