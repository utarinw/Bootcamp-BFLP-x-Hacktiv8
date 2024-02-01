function urutHuruf(text){
    let PisahHuruf = text.split('');
    let SortHuruf = PisahHuruf.sort();
    let HurufUrut = SortHuruf.join('');

    return HurufUrut;
}

console.log(urutHuruf("halo"))
console.log(urutHuruf("qwerty"))
console.log(urutHuruf("qwertyuiopasdfghjklzxcvbnm"))