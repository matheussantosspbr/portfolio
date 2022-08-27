let open = document.querySelector('.open')

let close = document.querySelector('.close')

open.addEventListener('click', function () {
  document.querySelector('nav').classList.add('show')
})

close.addEventListener('click', function () {
  document.querySelector('nav').classList.remove('show')
})

let titulo = window.location['pathname'].split('/')
tituloPag = ''
if (!(titulo[1] == '')) {
  if (titulo[2] && !(titulo[2] != 'index')) {
    tituloPag = titulo[2]
  } else {
    tituloPag = titulo[1]
  }
} else {
  tituloPag = 'Matheus Santos - Início'
}

document.title = tituloPag
console.log(tituloPag)
console.log(titulo)
