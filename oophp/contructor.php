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

// $produk1 = new Produk();
// // mengubah property 
// $produk1->judul = "naruto";
// // var_dump($produk1);

$produk1 = new produk ("naruto", "ilham", "HTI", "1jt");
$produk2 = new produk("mobile legend", "udin", "moonton", 400);
$produk3 = new produk("mobile legend");


echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);


?>