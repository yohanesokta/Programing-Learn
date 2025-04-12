const kata = (str) =>{
    return str.split('').filter((e,i) =>  i >= (str.length -3))
}
console.log(kata('yohanes'))