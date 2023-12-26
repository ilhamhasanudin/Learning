<?php 
// inheritance 
// meciptakan hierarki antar class (parent & child)
// o child class
// -mewarisi semua properti dan method dari parentnya (yang visible)
// - memperluas (extends) fungsionalitas dari parentnya

// inheritance problem \/
class produk {
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $wktMain;


    // contructor adalah sebuah method automatic ketika 
    // sebuah class di instasiasi / dibuat objectnya
    public function __construct( $judul = "naruto", $penulis = "unknown", 
    $penerbit = "unknown", $harga = 0, $jmlHalaman = 0, $wktMain = 0,) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->wktMain = $wktMain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
        return $str;
    }
}

class komik extends produk{
    public function getinfoProduk() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} Rp. {$this->harga} - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// Troubleshooting menggunakan inheritance atau pewarisan 
// kita menggunakan paremeter " extends "
class game extends produk{
    public function getinfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} Rp. {$this->harga} ~ {$this->wktMain} Menit.";
        return $str;
    }
}
 // object-type menggunakan sebuah object sebagai tipe data dari sebuah class  
class CetakInfoProduk {
    public function cetak( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} Rp. {$produk->harga}" ;
        return $str;
    }
}

// $produk1 = new Produk();
// // mengubah property 
// $produk1->judul = "naruto";
// // var_dump($produk1);

$produk1 = new komik("naruto", "Mashasi Kisimoto", "Shounen", "1jt", 100, 0,);
$produk2 = new game("mobile legend", "Cina", "moonton", 400, 0, 30,);



// echo "komik : " . $produk1->getLabel();
// echo "<br>";
// echo "game : " . $produk2->getLabel();
// echo "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk2);


// komik : Naruto | Mashasi Kisimoto, Shounen (Rp. 1jt) - 100 Halaman
// game : Mobile Legend | Cina, moonton, (Rp. 400) ~ 30 menit

echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();



?>