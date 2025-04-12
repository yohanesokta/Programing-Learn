package main

import "fmt"

func main() {
	person := map[string]string{
		"name":    "Raffi",
		"address": "Jakarta",
	}
	fmt.Println(person["name"])
	fmt.Println(person["address"])

	book := map[string]string{}
	book["title"] = "Belajar Golang"
	book["author"] = "Raffi"
	book["ups"] = "Salah"

	delete(book, "ups")
	fmt.Println(book)
}
