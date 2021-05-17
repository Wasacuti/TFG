const boton = document.getElementsByClassName('boton-responsive')[0]
const links = document.getElementsByClassName('menu-extensible')[0]

// Esta función es para crear el botón cuando se hace menos de 1000 px la página
boton.addEventListener('click', function() {
  links.classList.toggle("active")
  


})