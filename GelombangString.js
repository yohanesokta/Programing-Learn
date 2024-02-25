const wave = (s) => {
    s = s.toLowerCase()
    let result = []
    for (i = 0; i < s.length; i++) {
        if (s[i] !== " ") {
            result.push(s.split("").map((n, index) => (index == i) ? s[i].toUpperCase() : n).join(""))
        }
    }
    return result
}
console.log(wave('Yohanes'))

console.log(wave('two words'))
let result = ["Hello", "hEllo", "heLlo", "helLo", "hellO"];
assert.deepEqual(wave("hello"), result, "Should return: '" + result + "'");