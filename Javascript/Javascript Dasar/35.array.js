// Manipulasi Array

// 1. Menambah isi array
// var arr = []
// arr[0] = "Sandhika"
// arr[1] = "Galih"
// arr[2] = "Nofa"
// arr[6] = "Doddy"
// console.log(arr)

// 2. Menghapus isi array
// var arr = ["Sandhika", "Galih", "Nofa", "Doddy"]
// arr[1] = undefined
// console.log(arr)

// 3. Menampilkan isi array
var arr = ["Sandhika", "Galih", "Nofa", "Doddy"]
for (let i = 0; i < arr.length; i++) {
  console.log('Mahasiswa ke-' + (i + 1) + ' : ' + arr[i])
}