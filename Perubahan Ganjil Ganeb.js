function HitungPerubahan(arr) {
    if (arr.length == 0) {
        return 0;
    }
    let status, changed
    let first = true
    arr.forEach(number => {
        if (first) {
            if (number == arr[0]) {
                if (number < 0) {
                    status = "ganjel"
                } else[
                    status = "ganeb"
                ]
                changed = 0
                first = false
                return
            }
        }
        if (status == "ganeb") {
            console.log(number)

            if (number < 0) {
                status = "ganjil"
                changed += 1
                return
            }
        } else {
            console.log(number)
            if (number >= 0) {
                status = "ganeb"
                changed += 1
                return
            }
        }

    })
    return changed
}

console.log(HitungPerubahan([1, 2, 3, -1, -2, 0, 1, 2,])) //3
console.log(HitungPerubahan([1, 2, 3, -1, -2])) //2
console.log(HitungPerubahan([])) //0