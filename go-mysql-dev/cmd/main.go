package main

import (
	"fmt"
	"log"
	"net/http"

	"go-mysql/pkg"

	_ "github.com/go-sql-driver/mysql"
)

func handler(w http.ResponseWriter, _ *http.Request) {
	fmt.Fprint(w, "Hello world!")
}

func main() {
	dbconf := "admin:secret@tcp(db-backend-go:3306)/default?charset=utf8mb4"
	db := myapp.OpenDB("mysql", dbconf)
	defer myapp.CloseDB(db)

	if err := db.Ping(); err != nil {
		log.Fatal("db.Ping failed: ", err)
	}

	http.HandleFunc("/", handler)
	http.ListenAndServe(":8000", nil)
}
