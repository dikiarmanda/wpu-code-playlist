// function jumlahVolumeDuaKubus(a, b) {
//   var volumeA, volumeB, total

//   volumeA = a * a * a
//   volumeB = b * b * b

//   total = volumeA + volumeB

//   return total
// }

function jumlahVolumeDuaKubus(a, b) {
  return Math.pow(a, 3) + Math.pow(b, 3)
}

console.log(jumlahVolumeDuaKubus(8, 3))
console.log(jumlahVolumeDuaKubus(10, 4))