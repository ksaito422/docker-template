# GO + MySQL + Docker development environment

```
go version
1.19 darwin/amd64

mysql version
8.0

docker version
20.10.17

docker compose version
v2.7.0
```

## Usage

```
docker compose build --no-chache
// develop environment
docker compose up

// production environment
docker build --target production -t go-app:latest . -f docker/backend/Dockerfile

// docker compose upのネットワークを使うため、docker compose upしてから、やる
docker run --rm --network go-mysql-dev_default -p 8080:8000 go-app:latest

curl http://localhost:8000
curl http://localhost:8080
// result: Hello world!
```

## description

- 開発環境ではホットリロード対応
- 本番環境用イメージは軽量イメージを使用

## Notes

- To be a starter repository. // スターターリポジトリとすること
- Do not push development code to this repository // このリポジトリに開発用コードを push しない
