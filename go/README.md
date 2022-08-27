# GO + Docker development environment

```
go version
1.19 darwin/amd64

docker version
20.10.17

docker compose version
v2.7.0
```

## Usage

```
git clone https://github.com/saitooooooo/go-docker.git

docker compose build
docker compose up -d
docker compose exec backend go run main.go
// result: Hello world!!
```

## Notes

- To be a starter repository. // スターターリポジトリとすること
- Do not push development code to this repository // このリポジトリに開発用コードを push しない
