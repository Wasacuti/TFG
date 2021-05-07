const boton = document.getElementsByClassName('boton-responsive')[0]
const links = document.getElementsByClassName('menu-extensible')[0]
console.log("hola llegue")
if (boton) {
    console.log("llegue aqui")
}

if (links) {
    console.log("llegue aqui 2")
}


boton.addEventListener('click', function() {
  links.classList.toggle("active")
  


})