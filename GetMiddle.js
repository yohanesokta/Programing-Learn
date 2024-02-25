function getMiddle(str) {

    if (str.length <= 1) {
        return str
    }
    if (str.length % 2 == 0) {
        return String(str[(str.length / 2) - 1] + str[(str.length / 2)])
    } else {
        return String(str[(str.length + 1) / 2])
    }

}
console.log(getMiddle("testing"))