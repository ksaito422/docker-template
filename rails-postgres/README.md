# README

This README would normally document whatever steps are necessary to get the
application up and running.

Things you may want to cover:

* version

- Ruby v3.0.6
- Rails v7.0.5

* setup

```bash
docker compose build --no-cache
docker compose run web rails new . --force --no-deps --database=postgresql
# or
docker compose run web rails new . --force --no-deps --database=postgresql --api
```

```yml
# config/database.yml
default: &default
  adapter: postgresql
  encoding: unicode
  host: db
  username: postgres
  password: postgres
  pool: <%= ENV.fetch("RAILS_MAX_THREADS") { 5 } %>
```

```bash
docker compose run web rails db:create
docker compose up -d
```

open http://localhost:3001

* System dependencies

* Configuration

* Database creation

* Database initialization

* How to run the test suite

* Services (job queues, cache servers, search engines, etc.)

* Deployment instructions

* ...
