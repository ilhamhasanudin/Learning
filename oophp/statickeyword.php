<?php 
class contohStatic {
    public static $angka = 1;

    public function halo() {
       return "Hallo " . self::$angka++ . " kali. <br>"; 
    }
}
$obj = new contohStatic;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new contohStatic;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();


?>