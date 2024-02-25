function parser(n) { return n.split('.').map((e) => { return parseInt(e) }) }
const compareVersions = (a,b) => {
    a = parser(a);b=parser(b);
    for (i = 0; i < Math.min(a.length, b.length); i++) {
        condition = (a[i] < b[i]) ? 'kalah' : (a[i] > b[i]) ? 'menang' : false
        console.log(condition)
        if (condition) {return (condition == 'kalah') ? false : true}
    }    return (a.length < b.length) ? (b[a.length] == 0) : true
}

console.log(parser("10.4.4"))
console.log(compareVersions("10.4.3", "10.4.2"))