function cekPalindrom(input) {
    const cleanInput = input.toLowerCase().replace(/[^a-z0-9]/g,'');
    const reversedInput = cleanInput.split('').reverse().join('');
    return cleanInput === reversedInput;
  }
  
  // input contoh //
  const example1 = "Katak";
  const example2 = "Kasur Ini Rusak";
  const example3 = "Level";
  const example4 = "Malam";
  const example5 = "A man, a plan, a canal, Panama!";
  const example6 = "Coding";
  
  console.log(cekPalindrom(example1));
  console.log(cekPalindrom(example2));
  console.log(cekPalindrom(example3));
  console.log(cekPalindrom(example4));
  console.log(cekPalindrom(example5));
  console.log(cekPalindrom(example6));