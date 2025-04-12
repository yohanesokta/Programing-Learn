package main

import "fmt"

func main() {
	var array1 = [5]int{
		1, 2, 3, 4, 5,
	}
	fmt.Println(array1)

	var array2 = [5]int{
		1, 2,
	}
	fmt.Println(array2)
	var array3 = [...]int{
		1, 2,
	}
	fmt.Println(array3)

	// Slicing

	var name = [...]string{"raffi", "ahmad", "budi", "andi", "cahyo"}
	slices := name[1:3]
	fmt.Println(slices)
	fmt.Println(cap(slices))

	days := [...]string{"senin", "selasa", "rabu", "kamis", "jumat", "sabtu", "minggu"}

	dayslice1 := days[5:]
	fmt.Println(dayslice1)
	dayslice1[0] = "sabtuBaru"
	dayslice1[1] = "mingguBaru"
	fmt.Println(dayslice1)
	fmt.Println(days)

	/*
		Note :
		   iniArray := [...]int{1, 2, 3, 4, 5}
		   iniSlice := []int{1, 2, 3, 4, 5}
	*/
}
