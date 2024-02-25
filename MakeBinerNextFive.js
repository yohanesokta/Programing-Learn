function BinerNextFive(x) {
    result = ''
    for (let i = 0; i < x.length; i++) {
        if (parseInt(x[i]) < 5) {
            result += "0"
        } else {
            result += "1"
        }
    }
    return result
}

console.log(BinerNextFive('11883355')) // 00110011