// membuat object

// cara 1 - function declaration
function halo() {
  console.log('halo')
}
halo()

// cara 2 - object literal
var obj = {}
obj.halo = function () {
  console.log('halo')
}

// cara 3 - constructor
function Halo() {
  console.log('halo')
}
new Halo()