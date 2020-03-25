<?
class Produk {
       public $judul = "Judul",
              $penulis = "penulis",
              $penerbit = "penerbit",
              $harga = 0;

       public function __construct($judul, $penulis, $penerbit, $harga){
              $this->judul = $judul;
              $this->penerbit = $penulis;
              $this->penerbit = $penerbit;
              $this->harga = $harga;
       }

       public function getLabel() {
              return "$this->penulis, $this->penulis";
       }
}

$produk1 =  new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 =  new Produk("SAO", "Kayaba Akhihiko", "Shonen Jump", 30000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Anime : ". $produk2->getLabel();
