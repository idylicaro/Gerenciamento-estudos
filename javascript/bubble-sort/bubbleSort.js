module.exports = function bubbleSort (vector){
    let newArray = vector
    let temp = 0;    
    for(let i=0; i < newArray.length -1; i++){
        for(let j = 0; j<newArray.length-i-1; j++){
            if(newArray[j] > newArray[j+1]){
                temp = newArray[j]
                newArray[j] = newArray[j+1]
                newArray[j+1] = temp
            }
        }    
    }
    return newArray
}