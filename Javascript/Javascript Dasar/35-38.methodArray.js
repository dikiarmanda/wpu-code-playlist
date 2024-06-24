// Method pada array
var arr = ['Sandhika', 'Galih', 'Nofa']
// 1. join
// console.log(arr.join('-'))

// 2. push & pop
// arr.push('Doddy', 'Fitri')
// arr.pop()
// console.log(arr.join('-'))

// 3. unshift & shift
// arr.unshift('Doddy')
// arr.shift()
// console.log(arr.join('-'))

// 4. splice
// splice(indexAwal, mauDihapusBerapa, elemenBaru1, ElemenBaru2, ...)
// arr.splice(2, 0, 'Doddy', 'Fitri')
// console.log(arr.join('-'))

// 5. slice
// slice(awal,akhir)
// var arr = ['Sandhika', 'Galih', 'Nofa', 'Doddy', 'Fitri']
// var arr2 = arr.slice(1, 3)
// console.log(arr.join('-'))

// 6. foreach
// var angka = [1, 2, 3, 4, 5, 6, 7, 8]
// var nama = ['Sandhika', 'Galih', 'Nofa', 'Doddy', 'Fitri']
// for (let i = 0; i < angka.length; i++) {
//   console.log(angka[i])
// }

// angka.forEach(function (e) {
//   console.log(e)
// })

// nama.forEach(function (e, i) {
//   console.log('Mahasiswa ke-' + (i + 1) + ' adalah : ' + e)
// })

// 7. map
// var angka = [1, 2, 5, 3, 6, 7, 4, 8]
// var angka2 = angka.map(function (e) {
//   return e * 2
// })
// console.log(angka2.join('-'))

// 8. sort
// var angka = [1, 2, 20, 10, 6, 7, 4, 8]
// angka.sort(function (a, b) {
//   return a - b
// })
// console.log(angka.join('-'))

// 9. filter & find
var angka = [1, 2, 20, 10, 5, 6, 7, 4, 8]
var angka2 = angka.filter(function (x) {
  return x > 5
})
console.log(angka2)
var angka3 = angka.find(function (x) {
  return x > 5
})
console.log(angka3)