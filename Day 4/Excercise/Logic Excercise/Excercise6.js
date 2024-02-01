function gcd(firstNumber, secondNumber){
    while (secondNumber !== 0) {
        let temp = secondNumber;
        secondNumber = firstNumber % secondNumber;
        firstNumber = temp;
    }

    return firstNumber;
}

console.log(gcd(12,16));
console.log(gcd(50,40));
console.log(gcd(22,99));
console.log(gcd(24,36));
console.log(gcd(17,23));