<?php

class Mahasiswa {
    private $nim;
    private $nama;
    private $ipk;

    public function __construct($nim, $nama, $ipk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
    }

    public function getStatus() {
        if ($this->ipk >= 3.0) {
            return "Baik";
        } else {
            return "Perlu bimbingan";
        }
    }

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }
}

$mhs1 = new Mahasiswa("3124006", "Abe", 3.9);
$mhs2 = new Mahasiswa("3124009", "Budo", 2.0);

echo "NIM: " . $mhs1->getNim() . "<br>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "Status: " . $mhs1->getStatus() . "<br><br>";

echo "NIM: " . $mhs2->getNim() . "<br>";
echo "Nama: " . $mhs2->getNama() . "<br>";
echo "Status: " . $mhs2->getStatus() . "<br>";

?>
   