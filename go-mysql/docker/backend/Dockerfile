FROM golang:1.19.0-alpine

WORKDIR /go/src/app
COPY . .

RUN go mod tidy

CMD ["go", "run", "./cmd"]

