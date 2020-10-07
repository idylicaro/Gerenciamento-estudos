module.exports = function factorial (number){
    let result = number--;
    for(; number >= 1; number--){
        result *= number
    }
    return result
}