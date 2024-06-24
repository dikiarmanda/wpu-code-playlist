<?php
// cek apakah tombol submit sudah tekan atau belum
if (isset($_POST["submit"])) {
  // cek username & password
  if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
    // jika benar, redirect ke halaman admin
    header("Location: admin.php");
    exit;
  } else {
    // jika salah, tampilkan pesan kesalahan
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
</head>

<body>
  <h1>Login Admin</h1>
  <?php if (isset($error)): ?>
    <p style="color: red; font-style: italic;">username / password salah</p>
  <?php endif ?>
  <form action="" method="post">
    <label for="username">Username : </label>
    <input type="text" nama="username" id="username">
    <label for="password">Password : </label>
    <input type="password" nama="password" id="password">
    <button type="submit" name="submit">Login</button>
  </form>
</body>

</html>