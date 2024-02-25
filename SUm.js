const sum = (s) => (s.length > 0) ? s.reduce((_,__) => _ + __,0) : 0
console.log(sum([1,2,2.4]))