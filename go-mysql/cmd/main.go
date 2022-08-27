package main

import (
	"fmt"
	"net/http"
)

func handler(w http.ResponseWriter, _ *http.Request) {
	fmt.Fprint(w, "Hello world!")
}

func main() {
	http.HandleFunc("/", handler)
	http.ListenAndServe(":8000", nil)
}
