function threeStepsAB(text){
    let kata_pisah = text.split('');

    for(let i=0;i<=kata_pisah.length;i++){
        if(kata_pisah[i] === 'a'){
            for(let j=i+1; j<kata_pisah.length;j++){
                if (karakterArray[j] === 'b' && j - i === 3) {
                    return true;
                }
            }
        }


    }
    return false;
}

console.log(threeStepsAB('lane borrowed'));
console.log(threeStepsAB('i am sick'));
console.log(threeStepsAB('you are boring'));
console.log(threeStepsAB('barbarian'));
console.log(threeStepsAB('bacon and meat'));
