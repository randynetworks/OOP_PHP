<?

abstract class Produk {
    protected $judul,
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

    abstract public function getInfo();
}
