<?
class Produk {
       public $judul,
              $penulis,
              $penerbit,
              $harga,
              $halaman,
              $waktu;

       public function __construct($judul= "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $waktu = 0){
              $this->judul = $judul;
              $this->penulis = $penulis;
              $this->penerbit = $penerbit;
              $this->harga = $harga;
              $this->halaman = $halaman;
              $this->waktu = $waktu;
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
       public function getCetakInfoProduct () {
              $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->halaman} Halaman.";
              return $str;
       }
}

class Anime extends Produk {
       public function getCetakInfoProduct () {
              $str = "Anime : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktu} Jam.";
              return $str;
       }
}


class cetakInfo {
       public function cetak(Produk $produk) {
              $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
              return $str;
       }
}
$produk1 =  new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100,0,"Komik");
$produk2 =  new Anime("SAO", "Kayaba Akhihiko", "Shonen Jump", 30000,0,576, "Anime");

echo $produk1->getCetakInfoProduct();
echo "<br>";
echo $produk2->getCetakInfoProduct();
