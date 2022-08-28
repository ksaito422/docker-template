########################################
# prod build
########################################
FROM golang:1.19.0-alpine AS builder

WORKDIR /go/src/app
COPY go.mod ./

RUN go mod download

COPY . .

########################################
# Loacl environment
########################################
FROM golang:1.19.0 AS develop

WORKDIR /go/src/app

RUN go install github.com/cosmtrek/air@latest

CMD ["air", "-c", ".air.toml"]

