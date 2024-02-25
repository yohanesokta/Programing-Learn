function CheckWord(word) {
    // result = ""
    word = word.toLowerCase()
    for (let i = 0; i < word.length; i++) {
        console.log(word.lastIndexOf(word[i]))
        console.log(word.indexOf(word[i]))
    }
}
console.log(CheckWord("recede")) // ))(()