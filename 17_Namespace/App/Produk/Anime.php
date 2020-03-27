<?

class Anime extends Produk implements InfoProduk{
       
    public $waktu;
    
    public function __construct($judul= "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktu = 0){
           
           parent::__construct($judul, $penulis, $penerbit, $harga);
           
           $this->waktu = $waktu;
    }
    public function getInfo(){
           $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ";
           return $str;
    }
    
    public function getCetakInfoProduct () {
           $str = "Anime : ". $this->getInfo() ." - {$this->waktu} Jam.";
           return $str;
    }

}