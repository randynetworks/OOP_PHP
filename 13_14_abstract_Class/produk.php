 <?
abstract class Produk {
       private $judul,
               $penulis,
               $penerbit,
               $harga,
               $diskon = 0;
       
       public function __construct($judul= "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
              $this->judul = $judul;
              $this->penulis = $penulis;
              $this->penerbit = $penerbit;
              $this->harga = $harga;
       }
       // getter dan setter judul
       public function getJudul(){
              return $this->judul;
       }

       public function setJudul($judul){
              if (!is_string($judul)) {
                     throw new Exception("Judul Harus String");
              }
              $this->judul = $judul;
       }

       // getter dan setter penulis
       public function getPenulis(){
              return $this->penulis;
       }

       public function setPenulis($penulis){
              if (!is_string($penulis)) {
                     throw new Exception("penulis Harus String");
              }
              $this->penulis = $penulis;
       }

       // getter dan setter penerbit
       public function getPenerbit(){
              return $this->penerbit;
       }

       public function setpenerbit($penerbit){
              if (!is_string($penerbit)) {
                     throw new Exception("penerbit Harus String");
              }
              $this->penerbit = $penerbit;
       }
       
       // getter dan setter harga
       public function getHarga() {
              return $this->harga - ($this->harga * $this->diskon / 100 );
       }

       public function setHarga($harga) {
              $this->harga = $harga;
       }

       // getter dan setter diskon
       public function setDiskon($diskon){ 
              $this->diskon = $diskon;
       }

       public function getDiskon() {
              return $this->diskon;
       }



       // getter label
       public function getLabel() {
              return "$this->penulis, $this->penerbit";
       }

       //getter cetak
       abstract public function getCetakInfoProduct(); 
       
       public function getInfo(){
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
              $str = "Komik : ". $this->getInfo() ." - {$this->halaman} Halaman.";
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
              $str = "Anime : ". $this->getInfo() ." - {$this->waktu} Jam.";
              return $str;
       }

}


class cetakInfo {
       public $daftarProduk = [];

       public function tambahProduk (Produk $produk){
              $this->daftarProduk[] = $produk;
       }

       public function cetak() {
              $str = "DAFTAR PRODUK : <br>";

              foreach ($this->daftarProduk as $p) {
                      $str .= "- {$p->getCetakInfoProduct()} <br>";
              }
              return $str;
       }
}
$produk1 =  new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 =  new Anime("SAO", "Kayaba Akhihiko", "Shonen Jump", 250000,576);

$cetakProduk = new CetakInfo();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();