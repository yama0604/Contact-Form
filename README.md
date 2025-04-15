#　 アプリケーション名
お問い合わせフォーム

## 環境構築
- Dockerイメージのビルドとコンテナの起動
- cp .env.example .env
- php artisan key:generate
- docker-compose exec php bash
- php artisan migrate
- php artisan db:seed

## 使用技術(実行環境)
- PHP 8.3.20
- Laravel 8.83.2
- MySQL 8.0.26

## ER図
/Users/y/root/Contact-Form/ER.dio

## URL
- お問い合わせフォーム入力ページ: http://localhost/
- お問い合わせフォーム確認ページ: http://localhost/confirm
- サンクスページ: http://localhost/thanks
- ユーザ登録ページ: http://localhost/register
- ログインページ: http://localhost/loginogin
- 管理画面: http://localhost/admin


