<!DOCTYPE html>
<html lang="en">

<head>
  <title>POST</title>
</head>

<body>
  <?php if (isset($_POST['submit'])): ?>
    <h1>Selamat datang, <?= $_POST['nama'] ?></h1>
  <?php endif ?>
  <form action="" method="post">
    Masukkan nama :
    <input type="text" name="nama">
    <button type="submit" name="submit">Kirim</button>
  </form>
</body>

</html>