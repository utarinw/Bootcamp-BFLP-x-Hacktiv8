function cetak_tgl_sekarang(){
    let tgl_skrg = new Date();
    let tanggal = tgl_skrg.getDate();
    let bulan = tgl_skrg.getMonth()+1;
    let tahun = tgl_skrg.getFullYear();

    let formatTanggal = `${tanggal}/${bulan}/${tahun}`;

    console.log(`Tanggal sekarang: ${formatTanggal}`);
}

cetak_tgl_sekarang();

function GetTglNow(){
    let get_tgl_now = new Date();
    let tanggal = get_tgl_now.getDate();
    let bulan = get_tgl_now.getMonth()+1;
    let tahun = get_tgl_now.getFullYear();

    let formatTanggal = `${tanggal}/${bulan}/${tahun}`;

    return formatTanggal;
}

let tgl_skrg = GetTglNow();
console.log('Dapatkan tanggal sekarang, ', tgl_skrg)