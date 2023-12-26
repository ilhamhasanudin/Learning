<?php 
//jualan produk
// komik
// game

class produk {
    public $judul,
        $penulis,
        $penerbit,
        $harga;
    // contructor adalah sebuah method automatic ketika 
    // sebuah class di instasiasi / dibuat objectnya
    public function __construct( $judul = "naruto", $penulis = "unknown", 
    $penerbit = "unknown", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}
 // object-type menggunakan sebuah object sebagai tipe data dari sebuah class  
class CetakInfoProduk {
    public function cetak( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// $produk1 = new Produk();
// // mengubah property 
// $produk1->judul = "naruto";
// // var_dump($produk1);

$produk1 = new produk ("naruto", "Mashasi Kisimoto", "Shounen", "1jt");
$produk2 = new produk("mobile legend", "Cina", "moonton", 400);



echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk2);


?>