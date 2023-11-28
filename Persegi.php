<?php
class Persegi {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }

    public function hitungKeliling() {
        return 4 * $this->sisi;
    }
}

$persegi = new Persegi(5);

echo "Luas persegi: " . $persegi->hitungLuas() . "<br>";
echo "Keliling persegi: " . $persegi->hitungKeliling() ;
?>