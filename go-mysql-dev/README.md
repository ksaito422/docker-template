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
curl http://localhost:8000
// result: Hello world!
```

## description

- 開発環境ではホットリロード対応

## Notes

- To be a starter repository. // スターターリポジトリとすること
- Do not push development code to this repository // このリポジトリに開発用コードを push しない
