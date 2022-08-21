let open = document.querySelector('.open')

let close = document.querySelector('.close')

open.addEventListener('click', function () {
  document.querySelector('nav').classList.add('show')
})

close.addEventListener('click', function () {
  document.querySelector('nav').classList.remove('show')
})

let titulo = window.location['pathname'].split('/')
if(titulo[1] == ''){
  document.title = 'Matheus Santos - Início'
}else{
  document.title = titulo[1]
}
console.log(titulo)