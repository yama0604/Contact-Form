#

## 環境構築

### Docker ビルド

#### 1. git clone リンク

2. docker-compose up -d -build
   ＊MySQL は、OS によって起動しない場合があるのでそれぞれの PC に合わせて docker-compose.yml ファイルを編集してください。
   Laravel 環境構築
1. docker-compose exec php bash
1. composer install
   3..env.example ファイルから、env を作成し、環境変数を変更
1. php artisan key:generate
1. php artisan migrate
1. php artisan db:seed
   使用技術。
   • PHP 8.0
   • Laravel 10.0
   • MySQL 8.0
   URL &
   ・開発環境：http://localhost/
   • phpMyAdmin : http://localhost:8080/

# お問い合わせフォーム。

## 環境構築

- Docker のビルドからマイグレーション、シーディングまでを記述する

## 使用技術(実行環境)

- 例) Laravel 8.x(言語やフレームワーク、バージョンなどが記載されていると良い)

## ER 図

< - - - 作成した ER 図の画像 - - - >

## URL

- 例) 開発環境：http://localhost/
