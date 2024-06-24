var s = '';
var batas = 5;
// baris
for (var i = 0; i < batas; i++) {
  // spasi
  for (var j = batas - 1; j > i; j--) {
    s += ' ';
  }
  // bintang kiri atas
  for (var k = 0; k <= i; k++) {
    if (k % 2 == 0) {
      s += '1';
    } else {
      s += ' ';
    }
  }
  // bintang kanan atas
  for (var l = 0; l < i; l++) {
    if (i % 2 != 0) {
      if (l % 2 == 0) {
        s += '1';
      } else {
        s += ' ';
      }
    } else if (i % 2 == 0) {
      if (l % 2 != 0) {
        s += '1';
      } else {
        s += ' ';
      }
    }
  }
  s += '\n';
}
console.log(s);