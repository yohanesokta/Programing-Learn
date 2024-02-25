function PenjumlahanKuadrat(x) {
    let result = 0
    x.forEach(x => { result += Math.pow(x, 2) })
    return result
}

console.log(PenjumlahanKuadrat([1, 2, 2])) // 9