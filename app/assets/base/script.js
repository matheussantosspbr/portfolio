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
  if (titulo[2] && titulo[2] != 'index') {
    tituloPag = titulo[2]
  } else {
    tituloPag = titulo[1]
  }
} else {
  tituloPag = 'Matheus Santos - Início'
}

switch (tituloPag) {
  case 'inicio':
    tituloPag = 'Início'
    break
  case 'portfolio':
    tituloPag = 'Portfólio'
    break
  case 'regra_de_3':
    tituloPag = 'Regra de 3'
    break
}

String.prototype.capitalize = function () {
  return this.charAt(0).toUpperCase() + this.substr(1)
}

tituloPag = tituloPag.capitalize()
document.title = tituloPag

/* ============ Atualização da minha idade altomaticamente =============  */

function calculaIdade(dataNasc) {
  var dataAtual = new Date()
  var anoAtual = dataAtual.getFullYear()
  var anoNascParts = dataNasc.split('/')
  var diaNasc = anoNascParts[0]
  var mesNasc = anoNascParts[1]
  var anoNasc = anoNascParts[2]
  var idade = anoAtual - anoNasc
  var mesAtual = dataAtual.getMonth() + 1
  //Se mes atual for menor que o nascimento, nao fez aniversario ainda;
  if (mesAtual < mesNasc) {
    idade--
  } else {
    //Se estiver no mes do nascimento, verificar o dia
    if (mesAtual == mesNasc) {
      if (new Date().getDate() < diaNasc) {
        //Se a data atual for menor que o dia de nascimento ele ainda nao fez aniversario
        idade--
      }
    }
  }
  return idade
}

let idade = calculaIdade('03/09/2004')
console.log(idade)
