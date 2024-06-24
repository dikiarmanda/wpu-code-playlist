var gameOver = true;
while (gameOver) {
  // Menangkap pilihan player
  var user = prompt("Masukkan Pilihanmu ! gajah, orang, semut");
  var comp = Math.random();

  // Pilihan komputer
  if (comp < 0.34) {
    comp = 'gajah';
  } else if (comp <= 0.34 || comp >= 0.67) {
    comp = 'orang';
  } else {
    comp = 'semut';
  }

  // menentukan rules
  var hasil;
  if (user == comp) {
    hasil = 'SERI';
  } else if (user == 'gajah') {
    // if (comp == 'orang') {
    //     hasil = 'menang';
    // } else {
    //     hasil = 'kalah';
    // }
    hasil = (comp == 'orang') ? 'MENANG' : 'KALAH';
  } else if (user == 'orang') {
    hasil = (comp == 'semut') ? 'MENANG' : 'KALAH';
  } else if (user == 'semut') {
    hasil = (comp == 'gajah') ? 'MENANG' : 'KALAH';
  } else {
    hasil = 'Masukan salah';
  }

  // Tampilkan hasil
  alert('Kamu = ' + user + '\nKomputer = ' + comp + '\nHasilnya kamu = ' + hasil);
  gameOver = confirm('Main lagi ?');
}

alert('Terima Kasih');