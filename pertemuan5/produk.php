<?
class Produk {
       public $judul = "Judul",
              $penulis = "penulis",
              $penerbit = "penerbit",
              $harga = 0;

       public function __construct($judul, $penulis, $penerbit, $harga){
              $this->judul = $judul;
              $this->penulis = $penulis;
              $this->penerbit = $penerbit;
              $this->harga = $harga;
       }

       public function getLabel() {
              return "$this->penulis, $this->penerbit";
       }
}

class cetakInfo {
       public function cetak(Produk $produk) {
              $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
              return $str;
       }
}
$produk1 =  new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 =  new Produk("SAO", "Kayaba Akhihiko", "Shonen Jump", 30000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Anime : ". $produk2->getLabel();
echo "<br>";

$infoProduct1 = new cetakInfo();
echo $infoProduct1->cetak($produk1);

