#アプリケーション名

模擬案件_フリマアプリ

## 環境構築

Dockerビルド
・git clone <リンク>
・docker-compose up -d --build

時間設定の編集
・app.phpでtimezoneをAsia/Tokyoに変更

.envファイルの作成
・cp .env.example .envでデータベース接続のため.envファイル作成

暗号化のためのキーを生成
・php artisan key:generate

マイグレーションファイルの作成
・php artisan migrate

シーディング
・php artisan db:seed

## 開発環境

・ログイン画面:http://localhost/login

・会員登録画面:http://localhost/register

・商品一覧画面(トップ画面):http://localhost/

・商品詳細画面:http://localhost/item/{item_id}

・商品購入画面:http://localhost/purchase/{item_id}

・phpMyAdmin:http://localhost:8080/


## 使用技術

Laravel Framework 10.48.29
PHP 8.4.11
mysql  Ver 8.0.26 

## ER図


~/src/storage/app/public/image/er.svg

に保存してあります。
