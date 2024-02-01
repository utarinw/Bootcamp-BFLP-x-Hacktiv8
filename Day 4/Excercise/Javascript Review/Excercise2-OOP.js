const dirisendiri = {
    nama_depan: 'Utari',
    nama_belakang: 'nw',
    hoby: ['makan','minum','tidur'],
    fav_num: 3,
    wear_glasses: true,
}

dirisendiri['nama_lengkap']=dirisendiri.nama_depan + ' ' + dirisendiri.nama_belakang

console.log(dirisendiri.nama_lengkap)

dirisendiri['fav_num']='4';

dirisendiri['hobi']='coding';
console.log(dirisendiri.hobi)

dirisendiri['lulusan']='Hacktiv8';
console.log(dirisendiri.lulusan)

for (let hoby in dirisendiri.hoby){
    console.log(dirisendiri.hoby[hoby])}

let KeyObject = Object.keys(dirisendiri)
let ValueObject = Object.values(dirisendiri)
console.log(KeyObject)
console.log(ValueObject)

for (let keyobject in dirisendiri){
    console.log(keyobject + ' : ' + dirisendiri[keyobject])
}