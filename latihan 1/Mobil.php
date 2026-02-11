<?php
class Mobil {
    public $merk;
    private $warna;
    protected $kecepatanMaksimal;

    public function __construct($merk, $warna, $kecepatan) {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->kecepatanMaksimal = $kecepatan;
    }

    public function tampilkanMerk() {
        return "Merek mobil {$this->merk}";
    }

    private function getWarna() {
        return "Warna mobil adalah {$this->warna}";
    }

    public function tampilkanWarna() {
        return $this->getWarna();
    }

    protected function tampilkanKecepatanMaksimal() {
        return "Kecepatan maksimal mobil adalah {$this->kecepatanMaksimal} km/jam";
    }
}

class MobilSport extends Mobil {
    public function tampilkanInfoSport() {
        return $this->tampilkanKecepatanMaksimal();
    }

    public function cobaTampilkanWarna() {
        return $this->warna;
    }
}

$mobil1 = new Mobil("Toyota", "Biru", 180);
echo $mobil1->tampilkanMerk();
echo "<br>";
// echo $mobil1->getWarna(); // Akan error karena method bersifat private
echo $mobil1->tampilkanWarna();

echo "<br>";
$mobilSport = new MobilSport("Ferrari", "Kuning", 320);
echo $mobilSport->tampilkanInfoSport();
// echo $mobilSport->cobaTampilkanWarna(); // Akan error karena properti bersifat private
?>