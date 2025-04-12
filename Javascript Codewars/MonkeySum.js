const monkeyCount = (_) => [...Array(_).fill().map((_, i) => i + 1)]
console.log(monkeyCount(0))