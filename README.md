## Document

****

- ### 簡易SNS

- ログイン機能、リンク、TODO投稿、外部API連携、内部API連携

- 画面製造

  - ログイン画面を作成、/からアクセスしてもRedirectを行うようにする

  - ログインが完了したら、記事やメモの投稿や取得を行うサービスを登録する

- ログイン

  - MySqlに暗号化されたログイン情報を保存

  - テーブルにはid,email,passwordカラムを登録

   ```sql
  CREATE TABLE users (
    user_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL PRIMARY);
   ```

- 内部API 作成

  - 読み込み、書き込みをRoute/apiを通じて読み込みを行う

  - 最大表示件数をサーバサイドで定義し、ページ分割を行う

- 外部API連携

  - Github,Teratail,qiitaなどのAPIを利用する