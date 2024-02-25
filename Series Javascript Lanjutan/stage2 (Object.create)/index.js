const MethodMahasiswa = {
    kehadiran: function (hadir){
        this.nilai += hadir;
        console.log(`Kamu Dapat Nilai ${hadir} , Nilaimu Menjadi ${this.nilai}`);
    }
}

function FunSiswa(nama,nilai){
    let mahasiswa = Object.create(MethodMahasiswa);
    mahasiswa.nama = nama;
    mahasiswa.nilai = nilai

    // Wajib Return 
    return mahasiswa

}

let Mahasiswa = FunSiswa('Yohanes',10)

Mahasiswa.kehadiran(20)