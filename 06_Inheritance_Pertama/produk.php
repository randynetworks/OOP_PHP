<?
class Produk {
       public $judul,
              $penulis,
              $penerbit,
              $harga,
              $halaman,
              $waktu,
              $tipe;

       public function __construct($judul= "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $waktu = 0, $tipe="tipe"){
              $this->judul = $judul;
              $this->penulis = $penulis;
              $this->penerbit = $penerbit;
              $this->harga = $harga;
              $this->halaman = $halaman;
              $this->waktu = $waktu;
              $this->tipe = $tipe;
       }

       public function getLabel() {
              return "$this->penulis, $this->penerbit";
       }

       public function getCetakInfoLengkap () {
              $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
              
              if ($this->tipe == "Komik") {
                     $str .= "{$this->halaman} Halaman.";
              } else if ($this->tipe == "Anime") {
                     $str .= "{$this->waktu} Jam.";
              }
              
              return $str;
       }
}

class cetakInfo {
       public function cetak(Produk $produk) {
              $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
              return $str;
       }
}
$produk1 =  new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100,0,"Komik");
$produk2 =  new Produk("SAO", "Kayaba Akhihiko", "Shonen Jump", 30000,0,576, "Anime");

echo $produk1->getCetakInfoLengkap();
echo "<br>";
echo $produk2->getCetakInfoLengkap();
