function GetNumber(angka){
    console.log("Masukkan Angka: ", angka);
    
    if(angka%2 == 0){
        console.log('Genap')
    } else{
        console.log('Ganjil')
    }
}

GetNumber(67)

function CekGanjilGenap(angka){
    if(angka%2 == 0){
        return "genap";
    } else{
        return "ganjil";
    }
}

let cek_angka = CekGanjilGenap(90);
console.log("Angka tersebut adalah ", cek_angka)

// Cek tipe data (typeof)

function CekGanjilGenap(angka){
    if (typeof angka=='number'){
        if(angka%2 == 0){
            return "genap";
        } else{
            return "ganjil";
        }
    }
}

let cek_angka1 =  CekGanjilGenap(90)
console.log("Angkanya adalah ", cek_angka1)
let cek_angka2 =  CekGanjilGenap('Bukan Angka')
console.log("Angkanya adalah ",cek_angka2)

// Cek NaN

function CekGanjilGenap(angka){
    if (typeof angka=='number' && !isNaN(angka)){
        if(angka%2 == 0){
            return "genap";
        } else{
            return "ganjil";
        }
    }
    else{
        return "Invalid Data"
    }
}

let cek_angka3 =  CekGanjilGenap(90)
console.log("Angkanya adalah ", cek_angka3)
let cek_angka4 =  CekGanjilGenap('Bukan Angka')
console.log("Input Bukan Angka ",cek_angka4)
let cek_angka5 =  CekGanjilGenap(NaN)
console.log("input NaN ",cek_angka5)