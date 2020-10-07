module.exports = function linearSearch (vector, value){
    for(let interator = 0; interator < vector.length; interator++){
        if(vector[interator] === value)
            return interator 
    }
    return -1
}