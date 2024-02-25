function Mahasiswa(nama , nilai) {
    this.nama = nama;
    this.nilai = nilai
}

Mahasiswa.prototype.kehadiran = function (score){
    this.nilai += score
    console.log(`Kamu Dapat Nilai ${score} , Nilaimu Menjadi ${this.nilai} , Yang Asalnya adalah : ${this.nilai - score}`);
}

let Yohanes = new Mahasiswa('Yohanes',50);

Yohanes.kehadiran(200)