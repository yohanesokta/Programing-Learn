// Cara Membuat Object
// 1. Object Literal

// Tidak efektif untuk object yang banyak

let siswa  = {
    name: "YohanesOkta",
    nilai: 80,
    kehadiran : function (hadir){
        this.nilai = this.nilai + hadir;
        console.log(`Kamu Dapat Nilai ${hadir} , Nilaimu Menjadi ${this.nilai}`);
    }
}

// Execution

// siswa.kehadiran(30)


// 2. Function Declaration

// function FunSiswa(nama,nilai){
//     let mahasiswa = {};
//     mahasiswa.nama = nama;
//     mahasiswa.nilai = nilai

//     mahasiswa.kehadiran =  function (hadir){
//         this.nilai += hadir;
//         console.log(`Kamu Dapat Nilai ${hadir} , Nilaimu Menjadi ${this.nilai}`);
//     }

//     // Wajib Return 
//     return mahasiswa

// }

// let Mahasiswa = FunSiswa('Yohanes',10)
// l

// Mahasiswa.kehadiran(20)


// Construktur Function
// -> hampir sama dengan function declaration namun harus menyertakan new

function FunSiswa(nama,nilai){
    this.nama = nama;
    this.nilai = nilai

    this.kehadiran =  function (hadir){
        this.nilai += hadir;
        console.log(`Kamu Dapat Nilai ${hadir} , Nilaimu Menjadi ${this.nilai}`);
    }

}

let Mahasiswa = new FunSiswa('Yohanes',10)

Mahasiswa.kehadiran(20)