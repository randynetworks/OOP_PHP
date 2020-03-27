 <?

require_once 'App/init.php';

$produk1 =  new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 =  new Anime("SAO", "Kayaba Akhihiko", "Shonen Jump", 250000,576);

$cetakProduk = new CetakInfo();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();