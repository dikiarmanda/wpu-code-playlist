// Membuat Object
// Object Literal
var mhs = {
  nama: 'Sandhika Galih',
  nrp: '043040023',
  email: 'sandhikagalih@unpas.ac.id',
  jurusan: 'Teknik Informatika'
}

// function Declaration
function buatObjectMahasiswa(nama, nrp, email, jurusan) {
  var mhs = {}
  mhs.nama = nama
  mhs.nrp = nrp
  mhs.email = email
  mhs.jurusan = jurusan
  return mhs
}

var mhs3 = buatObjectMahasiswa('Nofariza', '023040123', 'nofa@yahoo.com', 'Teknik Pangan')
console.log(mhs3)

// Constructor
function Mahasiswa(nama, nrp, email, jurusan) {
  this.nama = nama
  this.nrp = nrp
  this.email = email
  this.jurusan = jurusan
}

var mhs4 = new Mahasiswa('Erik','013040321','erik@icloud.com','Teknik Mesin')
console.log(mhs4)