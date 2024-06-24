// function tambah(a, b) {
//   return a + b
// }

function tambah() {
  var hasil = 0
  for (var i = 0; i < arguments.length; i++) {
    hasil += arguments[i]
  }
  return hasil
}

function kali(a, b) {
  return a * b
}

var a = parseInt(prompt('Masukkan nilai 1 : '))
var b = parseInt(prompt('Masukkan nilai 2 : '))
var hasil = kali(tambah(a, b), tambah(a + 1, b + 1))
console.log(hasil)