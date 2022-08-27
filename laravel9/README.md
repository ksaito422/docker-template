# docker_laravel

Laravel の環境構築用の Docker リポジトリ

# docker-compose.yml 構成

php8.0-fpm-buster<br>
mysql8.0<br>
nginx1.18

# セットアップ

プロジェクト配下で下記コマンドを実行
`make create-project`

処理終了後、コンテナ起動確認
`make ps`

ローカルの Laravel プロジェクトの.env を編集

```
DB_CONNECTION=mysql
DB_HOST=db <-コンテナ名と合わせる
DB_PORT=3306
DB_DATABASE=default <-DB_NAMEと合わせる
DB_USERNAME=root <-特にこだわりなければこのままでOK
DB_PASSWORD=root <-特にこだわりなければこのままでOK
```

.env 編集後、migrate 実行（DB との疎通確認）
`make fresh`

最後に localhost:{PORT}にアクセスして、Laravel の画面表示されるか確認

# Laravel のバージョンを変える時

Makefile 内の

```
// laravelのversionを変更
laravel-install:
	docker-compose exec app composer create-project --prefer-dist "laravel/laravel=8.*" .
```
