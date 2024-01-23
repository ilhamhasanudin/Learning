<?php 
// visibility 
// adalah sebuah access dari turunan sebuah class

// public 
// dapat digunakan di mana saja bahkan diluar class 

// protected 
// dapat digunakan hanya di turunannya class saja

//Private
// hanya dapat di gunakan class tertentu 

class produk {
    private 
        $judul,
        $penulis,
        $penerbit;

    protected $diskon = 0;

    private $harga;


    // contructor adalah sebuah method automatic ketika 
    // sebuah class di instasiasi / dibuat objectnya

    public function __construct( $judul = "naruto", $penulis = "unknown", 
    $penerbit = "unknown", $harga = 0,) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
        return $str;
    }
    public function getJudul() {
        return $this->judul;
        
    }
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;

    }
    public function getHarga() {
        return $this->harga;
    }
}

// overiding = parent::__construct 
// overriding menggunakan function getinfoProduk di class public digunakan di child child child class komik extends produk di publik function construct 

class komik extends produk{
    public $jmlHalaman;
    
    public function __construct( $judul = "naruto", $penulis = "unknown", 
    $penerbit = "unknown", $harga = 0, $jmlHalaman = 0, ) 
    {
        parent::__construct( $judul, $penulis, 
        $penerbit, $harga, );

        $this->jmlHalaman = $jmlHalaman;
    }
        

    public function getinfoProduk() {
        $str = "Komik : " . parent::getinfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

 
class game extends produk{
    public $wktMain; 

    public function __construct($judul = "naruto", $penulis = "unknown", 
    $penerbit = "unknown", $harga = 0, $wktMain = 0,)
    {
        parent::__construct( $judul, $penulis, 
        $penerbit, $harga,);

        $this->wktMain = $wktMain;
    }
    public function getinfoProduk() {
        $str = "Game : " . parent::getinfoProduk() . " ~ {$this->wktMain} Menit.";
        return $str;
    }

}


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

$produk1 = new komik ("naruto", "Mashasi Kisimoto", "Shounen", "1jt", 100);
$produk2 = new game ("mobile legend", "Cina", "moonton", 400, 30,);



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

echo "<br>";

echo $produk2->getHarga();

echo "<br>";

echo $produk2->getjudul();

?>