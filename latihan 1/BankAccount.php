<?php

class BankAccount {
    // property
    public $pemilik;      // property yang dapat diakses
    private $saldo;       // property yang bersifat private

    public function __construct($pemilik, $saldoAwal) {
        $this->pemilik = $pemilik;
        $this->saldo = $saldoAwal;
    }

    public function deposito($jumlah) {
        // $this->saldo = $this->saldo + $jumlah;
        $this->saldo += $jumlah;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$akun = new BankAccount("Andi", 1000000);
$akun->deposito(500000);

$akun->pemilik = "Albert";
// $akun->saldo = 2000000; // error karena properti saldo bersifat private

echo $akun->getSaldo();
echo "<br> Pemilik akun: " . $akun->pemilik;

?>