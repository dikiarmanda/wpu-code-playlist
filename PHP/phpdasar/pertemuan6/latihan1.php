<?php
// array
// membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr = [123, "tulisan", false];
// menampilkan array
// versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
// Menampilkan 1 elemen pada array
echo $arr[0];
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Latihan Array</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      background-color: #BADA55;
      text-align: center;
      line-height: 50%;
      margin: 3px;
      float: left;
      transition: 1s;
    }

    .kotak:hover {
      transform: rotate(360deg);
      border-radius: 50%;
    }

    .clear {
      clear: both;
    }
  </style>
</head>

<body>
  <?php
  $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
  ?>
  <?php foreach ($angka as $a): ?>
    <div class="kotak"><?= $a ?></div>
  <?php endforeach ?>
  <div class="clear"></div>
</body>

</html>