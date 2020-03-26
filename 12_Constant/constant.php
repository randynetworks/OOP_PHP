<?
define("NAMA", "RANDY RAMADHAN");

echo NAMA;
echo "<br>";

const ANGKA = 10;
echo ANGKA;

// jika didalam class
echo "<hr>";

class Coba {

    const UMUR = 20;

}
echo Coba::UMUR;

echo "<hr>";


// penggunaan magic Constant

echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FUNCTION__;
echo "<br>";
echo __CLASS__;
echo "<br>";
echo __TRAIT__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;
