<?php
class Mahasiswa {
    // Properties
    public $nama;
    public $nim;
    public $prodi;

    //method
    public function seyHello(){
        return "Hello, nama saya" .$this->nama . ", NIM " .$this->nim . ", dari prodi" .$this->prodi . ".";
    }  

    //method2
    public function getprofile(){
        return "Nama :". $this->nama . 
        "<br>NIM : " . $this->nim .
        "<br>Prodi : " . $this->prodi . ".";
    }
}
// Membuat objek dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Albert";
$mahasiswa1->nim = "T3124006";
$mahasiswa1->prodi = "Informatika";

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nama = "Albert";
$mahasiswa2->nim = "T3124006";
$mahasiswa2->prodi = "Informatika";

//cetak hasil
echo $mahasiswa1->seyHello();
echo $mahasiswa1->getprofile();

echo $mahasiswa2->seyHello();
echo $mahasiswa2->getprofile();
?>