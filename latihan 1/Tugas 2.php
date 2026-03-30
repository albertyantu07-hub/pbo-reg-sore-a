<?php

class Buku {
    private $judul;
    private $penulis;
    private $tahunTerbit;
    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getInfo() {
        return "Judul: " . $this->judul . 
               ", Penulis: " . $this->penulis . 
               ", Tahun: " . $this->tahunTerbit;
    }
}

$buku1 = new Buku("Sebuah Seni Bersikap Bodo Amat", "Mark Manson", 2018);
$buku2 = new Buku("Hidup Minimalis Ala Orang Jepang", "Sasaki Fumio", 2017);
$buku3 = new Buku("45 Cara Kaya Ala Jeck Ma", "Astrid Safitri", 2019);
echo $buku1->getInfo() . "<br>";
echo $buku2->getInfo() . "<br>";
echo $buku3->getInfo() . "<br>";

?>