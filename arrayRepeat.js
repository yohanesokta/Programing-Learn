function solution(str) {
    repeat = 1
    resultString = ""
    result = []

    for (let i = 0; i < str.length; i++) {
        resultString += str[i]
        if (repeat == 2) {
            result.push(resultString)
            resultString = ""
            repeat = 1
        } else if (i == str.length - 1) {
            resultString += "_"
            result.push(resultString)
        }
        else {
            repeat++
        }


    }
    return result
}

console.log(solution('abc'))