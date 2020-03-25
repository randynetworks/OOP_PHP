
# PERTEMUAN 1 | PENDAHULUAN

APA ITU OOP ?
Gaya Penulisan Pemrograman/Paradigma Pemrograman

Perbedaan Procedural Programming dan OOP

Procedural Programming :
- intruksi dilakukan langkah demi langkah
- memecahkan program menjadi bagian2 kecil
- disebut procedur, subrutine atau function
- linear / top to bottom

Kelebihan Procedural Programming
- To the Point
- Simplicity & kemudahan implementasi (untuk comiler dan interpreter)
- mudah ditelusuri
- membutuhkan lebih sedikit memory dibanding OOP

------------------------------------------------
Object Oriented Programming
- Menyusun semua kode program dan struktur data sebagai object
- object adalah unit dasar dari program
- object menyimpan data dan perilaku
- object bisa saling berinteraksi

Kelebihan Object Oriented Programming
- Representasi dunia nyata
- enkapsulasi (aman) & abstraksi Data (menyembunyikan kerumitan data)
- reusability (menggunaka ulang)
- skalabilitas dan ekstensibilitas
- kemudaahan pengelolaan
- kolaborasi
- digunakan oleh framework




# PERTEMUAN 2 | OBJECT DAN CLASS


~ CLASS ~
- blueprint/template untuk membuat instance dari OBJECT
- Class mendifinisikan OBJECT
- menyimpan data dan perilaku yang desebut dengan properti dan method

penulisan :
class NamaClass {

}

~ Object ~
- Instance yang didefinisikan oleh Class
- banyak object dapat dibuat menggunkanan satu Class
- object dibuat dengan menggunakan keyword new

penulisan :
$namaVariable = new namaClass




# PERTEMUAN 3 | PROPERTY DAN METHOD

PROPERTY :
- merepresantasikan data/keadaan dari sebuah object
- variable yang ada didalam object ( member variable )
- sama seperti variable didalam PHP, ditambah dengan visibility didepannya (Public, Private, Protected)

cara penulisan :
class Product {
       //ini adalah properti
       public $judul, $penulis ....;
}

3 cara pengaplikasian ke object :
1. langsung didalam class nya :
       public $judul = "nama_judulnya"

2. membuat langsung didalam object baru
       $Product1 = new Product();
       $Product1->judul = "Naruto "

-----------------------------------------------
METHOD :
- merepresantasikan prilaku dari sebuah object
- function yang ada didalam object
- sama seperti functiond didalam PHP, ditambah dengan visibility didepannya

Cara Penulisan :
1. didalam Class, masukan :
       public function namaFungsi() {
              return blababa
       }
2. untuk mengeluarkannya :
       echo $Product1->namaFungsi();

Jika kita ingin memasukan properti didalam function, maka gunakan $this,
mengapa ? karena lingkup variable, jika tidak menggunakan $this, fungsi membuat variable baru

$this fungsinya : untuk mengambil isi dari properti didalam class yang bersangkutan

cara penulisan :
       public function namaFungsi() {
              return $this->judul, $this->penerbit
       }




# PERTEMUAN 4 | CONSTRUCTOR

apa itu Constructor :
- sebuah method yang special yang ada didalam sebuah kelas,
- method yang otomatis berjalan ketika kelas di instansiasi/buat object

penulisannya :
1. penulisan berada didalam class
       public function __construct() {

       }
2. pada kasus ini, agar tidak menulis manual data yang di input, 
data nanti akan dimasukan kedalam sebuah parameter, dan mengopernya ke properti yang ada

       public function __construct($judul, $penulis, $penerbit, $harga) {
              
       }
       *) perlu diingat, variable didalam parameter berbeda dengan properti

3. agar data yang dimasukan kedalam parameter langsung disimpan di propertis, gunakan $this
       
       public function __construct($judul, $penulis, $penerbit, $harga) {
          $this->judul = $judul;
          dst ..    
       }

4. Kita juga bisa buat default text setiap nilai variablenya didalam parameter :
       public function __construct($judul= "Judulnya", $penulis, $penerbit, $harga) {}

5. yang kita lakukan ketika instansiasi, masukan semua data didalam parameter
       $Product1 = new Product("Judulnya", "Penulis" ... dst);




# PERTEMUAN 5 | OBJECT TYPE

contoh studi kasus, membuat info

1. membuat class baru, tugasnya mencetak info Product saja
2. buat fungsi dengan parameter objectkita

       public function cetak( $product ) {
              $str = "{$product->judul} | {$product->getLabel} (RP. {$product->harga})"
       }

3. cara menampilkan info
       $infoProduct1 = new cetakInfo
       echo $infoProduct1->cetak($product1)

4. namun jika seperti itu saja, pembuatan parameter cetak di fungsi cetak, 
   dapat dimasuki apa pun input kita/user
   cara mengatasinya, buat deklarasi sebelum variable dengan jenis class tertentu

       public function cetak( Product $product ) {
              $str = "{$product->judul} | {$product->getLabel()} (RP. {$product->harga})";
       }    



# PERTEMUAN 6 | INHERITANCE 

 - Menciptakan hierarki antar kelas (Parent & Child)
 - Child Class, Mewarisi semua properti dan method dari parent-nya (yang visible)
 - Child Class, memperluas (ekstends) fungsionalitas dari parent-nya

 menyelesaikan problem dan mencoba fungsional baru di studi kasus
 Problem : 
 
 pada studi kasus kita, akan ada masalah jika jenis dari setiap object baru berbeda,
 dalam kasus ini, terdapat 2 jenis object baru (Komik dan anime) yang masing masing
 memiliki salahsatu properti yang berbeda.

 yang kita ingin kan adalah, kita menambahkan properti halaman pada komik,
 dan menambahkan durasi pada anime




 #PERTEMUAN 7 | INHERITANCE BAG. 2
 
 Penerapan Inheritance pada studi kasus kita
 
 cara Penulisan inheritance :

       class NamaClass extends namaParentClass {
              
       }



 # PERTEMUAN 8 | OVERRIDING
 
 Yaitu : 
 Method yang kita buat, menimpa dengan method parent nya
 kenapa harus melakukan overriding, karena setiap child memiliki fungsi yang
 sama namun memiliki perlakuan tambahan.

 cara penulisannya
       parent::namaFungsi_didalamParent



# PERTEMUAN 9 | VISIBILITY / Access Modifier

ADA 3 JENIS VISIBILITY
1. Public    : dapat digunakan dimana saja, bahkan diluar kelas
2. Protected : hanya dapat digunakan didalam sebuah kelas beserta turunannya
3. Private   : Hanya dapat digunakan didalam sebuah kelas tertentu saja

KENAPA HARUS MENGGUNAKAN VISIBILITY
1. hanya memperlihakan aspek class yang dibutuhkan oleh 'client'
2. menentukan kebutuhan yang jelas untuk object
3. memberikan kendali pada kode untuk menhindari 'bug'

