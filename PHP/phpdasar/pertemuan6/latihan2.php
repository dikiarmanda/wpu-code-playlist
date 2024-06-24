<?php
// $mahasiswa = [
//   ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
//   ["Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com"],
//   ["Erik", "023040123", "Teknik Planologi", "erik@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs): ?>
    <ul>
      <li>Nama : <?= $mhs["nama"] ?></li>
      <li>NRP : <?= $mhs["nrp"] ?></li>
      <li>Jurusan : <?= $mhs["jurusan"] ?></li>
      <li>Email : <?= $mhs["email"] ?></li>
    </ul>
  <?php endforeach ?>
</body>

</html>