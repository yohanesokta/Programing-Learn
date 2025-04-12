package main

import "fmt"

func main() {
	/*
		Konversi Tipe Data
		int8 = -128 s/d 127
		int16 = -32768 s/d 32767
		int32 = -2147483648 s/d 2147483647
		int64 = -9223372036854775808 s/d 9223372036854775807
	*/

	var nilai32 int32 = 32768
	var nilai64 int64 = int64(nilai32)
	var nilai16 int16 = int16(nilai32)

	fmt.Println(nilai64)
	fmt.Println(nilai16)

}
