<?php
class PersegiPanjang{
    public $panjang;
    public $lebar;

    public function hitungLuas(){
        return $this->panjang *
        $this->lebar;
    }

    public function hitungKeliling(){
        return 2 * ($this->panjang *
        $this->lebar);
    }
}

$pp1 = new PersegiPanjang();
$pp1->panjang = 10;
$pp1->lebar = 5;

$pp2 = new PersegiPanjang();
$pp2->panjang = 7;
$pp2->lebar = 4;

echo "<h3>Persegi Panjang 1</h3>";
echo "Panjang : {$pp1->panjang}<br>";
echo "lebar : {$pp1->lebar}<br>";
echo "luas : {$pp1->hitungLuas()}<br>";
echo "Keliling : {$pp1->hitungKeliling()}<br>";


echo "<hr>";
echo "<h3>Persegi Panjang 2</h3>";
echo "Panjang : {$pp2->panjang}<br>";
echo "lebar : {$pp2->lebar}<br>";
echo "luas : {$pp2->hitungLuas()}<br>";
echo "Keliling : {$pp2->hitungKeliling()}<br>";




?>