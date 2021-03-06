<?
class Produk {
       public $judul,
              $penulis,
              $penerbit,
              $harga;

       public function __construct($judul= "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
              $this->judul = $judul;
              $this->penulis = $penulis;
              $this->penerbit = $penerbit;
              $this->harga = $harga;
       }

       public function getLabel() {
              return "$this->penulis, $this->penerbit";
       }

       public function getCetakInfoProduct () {
              $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
              return $str;
       }
}

class Komik extends Produk {

       public $halaman;

       public function __construct($judul= "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0){
              
              parent::__construct($judul, $penulis, $penerbit, $harga);

              $this->halaman = $halaman;
       }

       public function getCetakInfoProduct () {
              $str = "Komik : ". parent::getCetakInfoProduct() ." - {$this->halaman} Halaman.";
              return $str;
       }
}

class Anime extends Produk {

       public $waktu;

       public function __construct($judul= "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktu = 0){
              
              parent::__construct($judul, $penulis, $penerbit, $harga);

              $this->waktu = $waktu;
       }

       public function getCetakInfoProduct () {
              $str = "Anime : ". parent::getCetakInfoProduct() ." - {$this->waktu} Jam.";
              return $str;
       }
}


class cetakInfo {
       public function cetak(Produk $produk) {
              $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
              return $str;
       }
}
$produk1 =  new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 =  new Anime("SAO", "Kayaba Akhihiko", "Shonen Jump", 30000,576);

echo $produk1->getCetakInfoProduct();
echo "<br>";
echo $produk2->getCetakInfoProduct();
