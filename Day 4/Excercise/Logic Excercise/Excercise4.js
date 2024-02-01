function isArithmeticProgression(number){
    if (number.length<2){
        return false;
    }

    // Hitung selisih
    let selisih = number[1]-number[0];
    
    // Cek selisih array
    for (let i=1;i<number.length -1;i++){
        if (number[i+1]-number[i] !== selisih){
            return false
        }
    }
    
    return true
}

console.log(isArithmeticProgression([1,2,3,4,5,6]));
console.log(isArithmeticProgression([2,4,6,12,24]));
console.log(isArithmeticProgression([2,4,6,8]));
console.log(isArithmeticProgression([2,6,18,54]));
console.log(isArithmeticProgression([1,2,3,4,7,9]));