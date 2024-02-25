class Mahasiswa {
    constructor(nama,nilai){
        this.nama = nama;
        this.nilai = nilai
    }
    kehadiran(score){
        this.nilai += score
        console.log(`Kamu Dapat Nilai ${score} , Nilaimu Menjadi ${this.nilai} , Yang Asalnya adalah : ${this.nilai - score}`);
    }
}

let Yohanes = new Mahasiswa("Yohanes",100)


Yohanes.kehadiran(200)