function suMix(x) {
    let value = 0
    x.forEach(element => {
        value += parseInt(element)
    });
    return value
}
console.log(suMix([2, 3, "5"]))