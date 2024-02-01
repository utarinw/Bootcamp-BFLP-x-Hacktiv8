function comprareNumbers (firstNumber,secondNumber){
    if(secondNumber==firstNumber){
        return -1;
    } else if (secondNumber>firstNumber){
        return true;
    } else{
        return false;
    }
}

console.log(comprareNumbers(5,8));
console.log(comprareNumbers(5,3));
console.log(comprareNumbers(4,4));
console.log(comprareNumbers(3,3));
console.log(comprareNumbers(17,2));