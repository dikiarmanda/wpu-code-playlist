<?php
// Variable Scope / lingkup variabel
// $x = 10;
// function tampilX()
// {
//   global $x;
//   echo $x;
// }

// tampilX();

// $_GET
$mahasiswa = [
  [
    "nama" => "Sandhika Galih",
    "nrp" => "043040023",
    "email" => "sandhikagalih@unpas.ac.id",
    "jurusan" => "Teknik Informatika",
  ],
  [
    "nama" => "Doddy Ferdiansyah",
    "nrp" => "033040001",
    "email" => "doddy@yahoo.com",
    "jurusan" => "Teknik Industri",
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>GET</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs): ?>
      <li>
        <a
          href="latihan2.php?nama=<?= $mhs["nama"] ?>&nrp=<?= $mhs["nrp"] ?>&jurusan=<?= $mhs["jurusan"] ?>&email=<?= $mhs["email"] ?>&"><?= $mhs["nama"] ?></a>
      </li>
    <?php endforeach ?>
  </ul>
</body>

</html>