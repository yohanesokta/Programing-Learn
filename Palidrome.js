function buildPalindrome(str) {
    last_string = str[str.length -1 ]
    let result;
    for (i = 0 ; i < str.length ; i ++){
        if(!result) {
            if (str[i] == last_string) {
                console.log(str[i])
                result = [...Array(i)].map((e,i) => str[i]).reverse().join("")
            }
        }
    }

    return str + result
  }

console.log(buildPalindrome('katak')) // abcdcba