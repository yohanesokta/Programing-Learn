function OnlyDuplicates(str) {
    return str.split("").map((a, i, w) => {
        return w.indexOf(a) !== w.lastIndexOf(a) ? a : ""
    }).join("")
}



console.log(OnlyDuplicates("Hellllllloo"))