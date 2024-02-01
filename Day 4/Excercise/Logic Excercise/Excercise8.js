function listPrime(angkaPertama, angkaKedua){
    let angkaPrima = [];

    for(let i=angkaPertama;i<=angkaKedua;i++){
        if (isPrime(i)){
            angkaPrima.push(angka);
        }
    }

    return angkaPrima;
}

function isPrime(angka){
    
    if (angka<=1){
        return false;
    }

    for (let i=1; i <= Math.sqrt(angka); i++){
        if(angka%i == 0){
            return false;
        }
    }

    return true;
}

console.log(listPrime(1,5));
console.log(listPrime(5,10));
console.log(listPrime(10,20));