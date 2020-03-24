<?
class Produk {
       public $judul = "Judul",
              $penulis = "penulis",
              $penerbit = "penerbit",
              $harga = 0;

       public function getLabel() {
              return "$this->penulis, $this->penulis";
       }
}

$produk1 =  new Produk();
$produk1->judul = "Naruto";
$produk1->penulis= "Masashi Kishimoto";
$produk1->penerbit= "Shonen Jump";
$produk1->harga = 30000;

$produk2 =  new Produk();
$produk2->judul = "SAO";
$produk2->penulis= "Kayaba Akhihiko";
$produk2->penerbit= "Shonen Jump";
$produk2->harga = 300000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Anime : ". $produk2->getLabel();
