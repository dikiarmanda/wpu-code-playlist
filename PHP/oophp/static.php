<?php
class ContohStatic
{
  public static $angka = 1;

  public static function halo()
  {
    return "Halo " . self::$angka++ . " kali.";
  }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";

class Contoh
{
  public static $angka = 1;

  public function halo2()
  {
    return "Halo " . self::$angka++ . " kali. <br>";
  }
}

$obj = new Contoh();
$obj2 = new Contoh();

echo $obj->halo2();
echo $obj->halo2();
echo $obj->halo2();
echo "<hr>";
echo $obj2->halo2();
echo $obj2->halo2();
echo $obj2->halo2();