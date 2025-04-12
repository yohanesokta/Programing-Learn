function CountBy(x, n) {
    let z = []
    let defAult = 0
    for (i = 0; (i < n); i++) {
        defAult += x
        z.push(defAult)
    }
    return z
}
console.log(CountBy(1, 10))