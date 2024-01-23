<?php 


// Polimorfisme dalam OOP merupakan sebuah konsep OOP di mana class memiliki 
// banyak “bentuk” method yang berbeda, meskipun namanya sama. Maksud dari “bentuk”
//  adalah isinya yang berbeda, namun tipe data dan parameternya berbeda.

// Konsep abstract class. Abstract class atau kelas abstrak adalah kelas yang 
// terletak di posisi tertinggi dalam hierarki class. Class ini tidak dapat 
// diinstansiasi karena masih bersifat abstrak. Class ini hanya berisi variabel 
// umum dan deklarasi method tanpa detail penggunaannya (abstract method)
// hanya dapat diinstansiasi di class turunannya 


abstract class produk {
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

    abstract public function getinfoProduk();

    public function getinfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
        return $str;
    }
    public function setJudul($judul) {
        $this->judul = $judul;
        
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
        $str = "Komik : " . parent::getinfo() . " - {$this->jmlHalaman} Halaman.";
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
        $str = "Game : " . parent::getinfo() . " ~ {$this->wktMain} Menit.";
        return $str;
    }

}


class CetakInfoProduk {
    public $daftarProduk = [];
    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "Daftar Produk : <br>";

        foreach( $this->daftarProduk as $p ){
            $str .= "- {$p->getinfoProduk()} <br>";
        }

        return $str;
    }
}

// $produk1 = new Produk();
// // mengubah property 
// $produk1->judul = "naruto";
// // var_dump($produk1);

$produk1 = new komik ("naruto", "Mashasi Kisimoto", "Shounen", "1jt", 100);
$produk2 = new game ("mobile legend", "Cina", "moonton", 400, 30,);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();




?>