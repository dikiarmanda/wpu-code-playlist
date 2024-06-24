<?php
// cek apakah tidak ada data di $_GET
if (!isset($_GET['nama']) || !isset($_GET['nrp']) || !isset($_GET['jurusan']) || !isset($_GET['email'])) {
  // redirect
  header("Location: latihan1.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Detail Mahasiswa</title>
</head>

<body>
  <ul>
    <li><?= $_GET['nama'] ?></li>
    <li><?= $_GET['nrp'] ?></li>
    <li><?= $_GET['jurusan'] ?></li>
    <li><?= $_GET['email'] ?></li>
  </ul>
  <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>

</html>