function isPrime(num) {
    let trys = 0;
    for (let i = 1; i <= num; i++) {
        if (num % i == 0) {
            trys++
            console.log(trys)
        }
    }

    if (trys == 2) {
        return true
    } else {
        return false
    }
}

console.log(isPrime())