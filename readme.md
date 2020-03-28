
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
       
       public $judul = "nama_judulnya";

2. membuat langsung didalam object baru
       
       $Product1 = new Product();
       $Product1->judul = "Naruto ";

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



# PERTEMUAN 10 | SETTER DAN GETTER (Accessor Method)

## Setter

Method yang mengubah isi Properti yang Protected atau Private
penulisannya sendiri, sama seperti function biasa

       public function setNamaFunction( $yangDiImput ) {
              
       }

jangan lupa, karena akan di set, jdi kita harus mengoper parameter di functionnya

## Getter

Method yang membaca/menampilkan isi Properti yang Protected atau Private
penulisannya sendiri, sama seperti function biasa

       public function getNamaFunction() {
              
       }

fungsi keduanya simple, karena properti yang sebelumnya dibuat visibility nya
protected atau private, didalam getter dan setter hanya membuat getter bisa diakses,
dan setter bisa di gunakan.

**Di studi kasus ini sendiri kita akan membuat properti tidak dapat di akses secara langsung,
melainkan diakses menggunakan getter dan setter agar lebih aman

# PERTEMUAN 11 | STATIC KEYWORD
kita bisa mengakses property dan method dalam konteks class

cara penulisan static keyword didalam class:

- untuk property

       public static namaProperty;

- untuk method

       public static function namaMethod() {

       }

cara memanggil/mengeluarkan properti yang ada keyword static :

       echo NamaClass::$namaProperty;

cara memanggil/mengeluarkan method yang ada keyword static :

       echo NamaClass::namaMethod();

untuk memanggil property didalam suatu class menggukanan method,
kita tidak lagi menggunakan $this karena, ia hanya belaku ketika object baru
di instansiasi. cara pemanggilan :

       self::$namaProperty;

### Untuk Apa Static Keyword ?
- Member yang terikat dengan class, bukan dengan object
- nilai static akan selalu tetap meskipun object di -nstansiasi berulang kali
- membuat kode menjadi lebih procedural
- biasanya digunakan untuk membuat fungsi bantuan / helper
- atau digunakan di class class frameworks



# PERTEMUAN 12 | CONSTANT

Constant adalah sebuah identifier untuk menyimpan nilai,
namun nilai yang telah di set tidak bisa berubah.

penulisan constanta harus menggunakan huruf besar,
konstan tanpa menggunakan $

2 Cara Pembuatan COnstant

- Keyword defide()

       define(NAME, value);

untuk mengaksesnya :

       echo NAME;

- keyword const

       const NAME = value;

untuk mengaksesnya :

       echo NAME;

perbedaan dari keduanya adalah, ketika kita akan menggunakan konsep
object oriented. 

Jika kita ingin membuat constant dengan define, maka penulisannya harus diluar class
karena bersifat global.

jika kita ingin membuat constant dengan const, maka penulisannya bisa didalam Class


Penulisan const didalam class :

       Class NamaClass {
              const NAME = value;
       }

       echo NamaClass::NAME;

Ada yang namanya Magic Constant,  yaitu constant yang disediakan langsung oleh PHP,
biasanya nilai dari masing masing berisi informasi program PHP kita

- __LINE__
- __FILE__
- __DIR__
- __FUNCTION__
- __CLASS__
- __TRAIT__
- __METHOD__
- __NAMESPACE__

 

# PERTEMUAN 13 - 14 | ABSTRACT CLASS

### Teori

Apa itu abstrak class :
- Sebuah kelas yang tidak dapat di instansiasi
- kelas 'Abstrak'
- Mendefinisikan interface untuk kelas lain yang menjadi turunannya
- berperan sebagai kerangka dasar untuk kelas turunannya
- memiliki minimal 1 method abstrak
- digunakan dalam inheritance untuk memaksakan impolementasi method abstrak
  yang sama untuk semua kelas turunannya
- Semuia kelas turunan, harus mengimplementasikan method abstrak yang ada dikelas abstraknya
- kelas abstrak boleh memiliki properti/method reguler dan boleh memiliki property/static method


Kenapa Menggunakan kelas abstrak ?
- merepresentasikan ide atau konsep dasar
- comosition over inheritance
- salah satu cara menerapkan polimorphism
- sentralisasi logic
- mempermudah pengerjaan tim

### Pembuatan Kelas Abstrak
Class abstrak didefinisikan dengan menambahkan abstract sebelum deklarasi class

       abstract class Buah {
 
       }


### Pembuatan function Abstrak
function abstrak didefinisikan dengan menambahkan abstract sebelum deklarasi function

       abstract public function makan();





# PERTEMUAN 15 | INTERFACE

Apa itu interface ?
- Kelas abstrak yang sama sekali tidak memiliki implementasi
- murni merupakan tempate untuk kelas turunannya
- tidak boleh memiliki properti, hanya deklarasi method saja
- semua method harus dideklarasikan dengan visibility public
- boleh mendeklarasikan __construct()
- satu kelas boleh mengimplementasikan banyak interface
- dengan meggunakan type-hinting dapat melakukan 'dependency injectiom'
- pada akhirnya akan mencapai polymorphism

- setiap child class wajib mewarisi method di kelas interface.

cara penulisan interface :

       interface NamaInterface {

       }

cara penerapan ke child class :

       class NamaClass implements NamaInterface {

       }

cara penerapan ke child class lebih dari 1 interface :

       class NamaClass implements NamaInterface1, NamaInterface2 {

       }

cara penerapan ke child class dari parent class + interface :

       class NamaClass extends ParentClass implements NamaInterface {

       }



# PERTEMUAN 16 | AUTOLOLOADING

Apa itu autoloading ?

- memanggil class (file) tanpa harus menggunakan require

cara menggunakannya :
1. kita pecah semua class menjadi 1 class 1 file
2. penulisan nama file harus sesuai dengan nama class
3. cara menghubungkan semua class mengunakan fungsi :

       spl_autoload_register();

4. require hanya berada di index.php saja
 


# PERTEMUAN 17 | NAMESPACE / ENCAPTULATION

Sebuah cara untuk mengelompokan program ke dalam sebuah
package tersediri/ identitas tersendiri

PHP tidak mengijinkan kita untuk memiliki
2 class dengan nama yang sama

### Studi kasus
pada kasus ini, kita akan membuat user.php didalam folder produk
dan di folder Service

penulisan namespace di tulis diawal paling atas file php.

       namespace vendor\namespace\subnamespace;

cara pemanggilan class dengan namepspace :

       echo namespace\namaClass;

       c/
       echo App\Produk\User;

### pengaturan didalam file init.

akan terjadi error bila kita memasukan 2 folder kedalam fungsi 

       spl_autoload_register();

cara melakukannya adalah dengan membuat fungsi baru saja.

permasalahan selanjutnya adalah, ketika dijalankan akan terjadi error,
karena file php tidak mengetahui direktori yang telah diubah menjadi namespace

       Warning: require_once(Produk/App\Produk\User.php): failed to open stream.

dapat disimpulkan dengan jelas bahwa yang diambil php adalah direktori namepspace

cara mengakalinya adalah dengan memecah semua direktori dengan explode() (menjadi array)
dan mengambil index paling akhir (karena nama file terdapat disana).

       $class = explode('\\', $class);
       $class = end($class);

pengambilan dengan explode mengambil yang membatasi (\)

### penggunaan use untuk alias

use atau alias digunakan agar kita tidak selalu membawa nama namespacenya,
karena suatu saat akan ada namespace yang panjang dan kita harus mengulang ngulang nya

cara penulisannya :

       use namespace as alias

dan cara penggunaannya kita tidak lagi menggunakan namespace tapi alianya:

       new alias;

