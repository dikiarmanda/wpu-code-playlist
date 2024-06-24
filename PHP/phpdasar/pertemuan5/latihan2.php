<?php
// Pengulangan pada array
// for / foreach
$angka = [3, 2, 15, 20, 11, 77, 89];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Latihan 2</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50%;
      margin: 3px;
      float: left;
    }

    .clear {
      clear: both;
    }
  </style>
</head>

<body>
  <?php for ($i = 0; $i < count($angka); $i++): ?>
    <div class="kotak"><?= $angka[$i] ?></div>
  <?php endfor ?>
  <div class="clear"></div>
  <?php foreach ($angka as $item): ?>
    <div class="kotak"><?= $item ?></div>
  <?php endforeach ?>
</body>

</html>