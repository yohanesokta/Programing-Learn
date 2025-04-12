package main

import "fmt"

func main() {
	var name string
	name = "John Doe"
	fmt.Println(name)

	// langsung deklarasi dan inisialisasi

	var (
		firstName string = "John"
		lastName  string = "Doe"
		age       int    = 30
	)

	fmt.Println(firstName, lastName, age)

	// constantant

	const pi = 3.14
	fmt.Println(pi)

}
