function reverseString(text){
    let karakterArray = text.split('');
    let kata_kebalik = karakterArray.reverse();
    let string_reversed = kata_kebalik.join('');

    return string_reversed;
}

console.log(reverseString('Hello World and Coders'));
console.log(reverseString('John Doe'));
console.log(reverseString('I am a bookwors'));
console.log(reverseString('Codng is my hobby'));
console.log(reverseString('Super'));