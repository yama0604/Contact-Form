## アプリケーション名

- お問い合わせフォーム

## 環境構築

- Docker イメージのビルドとコンテナの起動
- docker-compose exec php bash
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan db:seed

## 使用技術(実行環境)

- PHP 8.3.20
- Laravel 8.83.2
- MySQL 8.0.26

## ER 図

- ![Image](https://github.com/user-attachments/assets/9dbd05a9-2cd0-4c02-849a-b322ee34325d)

## URL

- お問い合わせフォーム入力ページ: http://localhost/
- お問い合わせフォーム確認ページ: http://localhost/confirm
- サンクスページ: http://localhost/thanks
- ユーザ登録ページ: http://localhost/register
- ログインページ: http://localhost/loginogin
- 管理画面: http://localhost/admin
