<?php 
//jualan produk
// komik
// game

class produk {
    public $judul = "hitanomi",
        $penulis = "ilham",
        $penerbit = "HTI",
        $harga = "Rp. 200";

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// // mengubah property 
// $produk1->judul = "naruto";
// // var_dump($produk1);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "30000";


$produk4 = new Produk();
$produk4->judul = "Naruto1";
$produk4->penulis = "Masashi Kisimoto1";
$produk4->penerbit = "Shonen Jump1";
$produk4->harga = "400001";

echo "komik : " . $produk3->getLabel();
echo "<br>";

echo "game : " . $produk4->getLabel();


?>