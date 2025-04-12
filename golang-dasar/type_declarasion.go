package main

import "fmt"

// Type Declaration
func main() {
	type NomorKTP string

	var KTP NomorKTP = "1234567890123456"
	fmt.Println(KTP)
	var contoh string = "123"
	var contohKTP NomorKTP = NomorKTP(contoh)

	fmt.Println(contohKTP)
}
