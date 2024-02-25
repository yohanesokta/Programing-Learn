function nameThatNumber(num) {
    const NameDefault = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen"]
    const AvalableName = ["teen",]
    const puluhanText = ["twenty", "thirty", "forty", "fifty", "", "", "eighty", ""]
    if (num <= 13) {
        return NameDefault[num]
    } else if (num > 11 && num <= 19) {
        return (num == 15) ? "fifteen" : (num == 18) ? "eighteen" : NameDefault[num - 10] + AvalableName[0]
    } if (num >= 20 && num <= 99) {
        const puluhan = (([6, 7, 9].includes(Math.floor(num / 10)))) ? NameDefault[Math.floor(num / 10)] + "ty" : puluhanText[Math.floor(num / 10) - 2]
        const satuan = parseInt(String(num)[1])
        console.log(satuan)
        return (satuan !== 0) ? puluhan + " " + NameDefault[satuan] : puluhan
    }
}
console.log(nameThatNumber(18))