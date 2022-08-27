FROM golang:1.19.0-alpine

RUN apk update && apk add \
	git

COPY . /go/src/app

WORKDIR /go/src/app/cmd
