<?

class ContohStatic {
    public static $angka = 1;

    public static function cetak () {
        return "Cetak " . self::$angka . " kali.";
    }
}

// untuk memanggil tanpa instansiasi object

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::cetak();

// =========================================
echo "<hr>";

// contoh tanpa static dengan object

class ContohTanpaStatic {
    public $angka2 = 1;

    public function cetak2 () {
        return "Cetak " . $this->angka2++ . " kali. <br>";
    }
}

$obj1 = new ContohTanpaStatic;

echo $obj1->cetak2();
echo $obj1->cetak2();
echo $obj1->cetak2();

// =========================================
echo "<hr>";

// contoh static dengan object

class ContohDenganStatic {
    public static $angka2 = 1;

    public function cetak2 () {
        return "Cetak " . self::$angka2++ . " kali. <br>";
    }
}

$obj2 = new ContohDenganStatic;
echo $obj2->cetak2();
echo $obj2->cetak2();
echo $obj2->cetak2();
echo "<hr>";
$obj3 = new ContohDenganStatic;
echo $obj3->cetak2();
echo $obj3->cetak2();
echo $obj3->cetak2();
