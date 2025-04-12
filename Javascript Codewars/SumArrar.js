const positiveSum = (ar) => ar.filter((v) => v > 0).reduce((e, i) => e + i, 0)
console.log(positiveSum([1, 2, -1, 2, 3, -10]))

const solution = (s) => s.split('').reverse().join('')


console.log(solution('hanes'))