function enviar() {
  var opcao = document.querySelector('#regra').value

  var res = document.querySelector('#res')

  if (opcao == 0) {
    res.innerHTML = `<div id="alerta_res">Atenção, Selecione a sua Opção!!</div>`
  } else if (opcao == 1) {
    res.innerHTML = `
    <div class="input">
      <input type="number" id="num1" required/>
      <input type="number" id="num2" class="left" required/>
    </div>
    <div class="in">=</div>
    <div class="input">
      <input type="number" id="num3" required/>
      <p class="left">x</p>
    </div>
    <button id="botão" onclick="calcular1()">Enviar</button>
    `
  } else if (opcao == 2) {
    res.innerHTML = `
    <div class="input">
      <input type="number" id="num2"/>
      <p class="left">x</p>
    </div>
    <div class="in">=</div>
    <div class="input">
      <input type="number" id="num1" />
      <input type="number" id="num3" class="left"/>
    </div>
    <button id="botão" onclick="calcular2()" >Enviar</button>
    `
  } else if (opcao == 3) {
    res.innerHTML = `
    <div class="input">
      <p>x</p>
      <input type="number" id="num3" class="left"/>
    </div>
    <div class="in">=</div>
    <div class="input">
      <input type="number" id="num2"/>
      <input type="number" id="num1" class="left" />
    </div>
    <button id="botão" onclick="calcular3()">Enviar</button>
    `
  } else if (opcao == 4) {
    res.innerHTML = `
    <div class="input">
      <input type="number" id="num2"/>
      <input type="number" id="num1" class="left "/>
    </div>
    <div class="in">=</div>
    <div class="input">
      <p>x</p>  
      <input type="number" id="num3"  class="left"/>
    </div>
    <button id="botão" onclick="calcular4()">Enviar</button>
    `
  }

  var resConta = document.querySelector('#res_conta')

  resConta.innerHTML = ` `
}

function calcular1() {
  var res = document.querySelector('#res_conta')
  var num1 = document.querySelector('#num1').value
  var num2 = document.querySelector('#num2').value
  var num3 = document.querySelector('#num3').value

  if (num1 == 0 || num2 == 0 || num3 == 0) {
    res.innerHTML = `<div id="alerta_res">Atenção <br> Não se Pode conter o Número 0, e Nem deixar o Campo Vazio !!</div>`
  } else {
    var res1 = num2 * num3
    var resFinal = res1 / num1

    res.innerHTML = `
  <h2>Resposta</h2>
  <div id="res_conta1">
    <p>${num1}x = ${num2} . ${num3}</p>
    <p>${num1}x = ${res1}</p>
    <p>x = ${res1} / ${num1}</p>
    <p>x = ${resFinal}</p>
    <br>
    <p> A Resposta é ${resFinal}</p>
  </div>
  `
  }
}

function calcular2() {
  var res = document.querySelector('#res_conta')
  var num1 = document.querySelector('#num1').value
  var num2 = document.querySelector('#num2').value
  var num3 = document.querySelector('#num3').value

  if (num1 == 0 || num2 == 0 || num3 == 0) {
    res.innerHTML = `<div id="alerta_res">Atenção <br> Não se Pode conter o Número 0, e Nem deixar o Campo Vazio !!</div>`
  } else {
    var res1 = num2 * num3
    var resFinal = res1 / num1

    res.innerHTML = `
    <h2>Resposta</h2>
    <div id="res_conta1">
      <p>${num1}x = ${num2} . ${num3}</p>
      <p>${num1}x = ${res1}</p>
      <p>x = ${res1} / ${num1}</p>
      <p>x = ${resFinal}</p>
      <br>
      <p> A Resposta é ${resFinal}</p>
    </div>
    `
  }
}

function calcular3() {
  var res = document.querySelector('#res_conta')
  var num1 = document.querySelector('#num1').value
  var num2 = document.querySelector('#num2').value
  var num3 = document.querySelector('#num3').value

  if (num1 == 0 || num2 == 0 || num3 == 0) {
    res.innerHTML = `<div id="alerta_res">Atenção <br> Não se Pode conter o Número 0, e Nem deixar o Campo Vazio !!</div>`
  } else {
    var res1 = num2 * num3
    var resFinal = res1 / num1

    res.innerHTML = `
  <h2>Resposta</h2>
  <div id="res_conta1">
    <p>${num1}x = ${num2} . ${num3}</p>
    <p>${num1}x = ${res1}</p>
    <p>x = ${res1} / ${num1}</p>
    <p>x = ${resFinal}</p>
    <br>
    <p> A Resposta é ${resFinal}</p>
  </div>
  `
  }
}

function calcular4() {
  var res = document.querySelector('#res_conta')
  var num1 = document.querySelector('#num1').value
  var num2 = document.querySelector('#num2').value
  var num3 = document.querySelector('#num3').value

  if (num1 == 0 || num2 == 0 || num3 == 0) {
    res.innerHTML = `<div id="alerta_res">Atenção <br> Não se Pode conter o Número 0, e Nem deixar o Campo Vazio !!</div>`
  } else {
    var res1 = num2 * num3
    var resFinal = res1 / num1

    res.innerHTML = `
  <h2>Resposta</h2>
  <div id="res_conta1">
    <p>${num1}x = ${num2} . ${num3}</p>
    <p>${num1}x = ${res1}</p>
    <p>x = ${res1} / ${num1}</p>
    <p>x = ${resFinal}</p>
    <br>
    <p> A Resposta é ${resFinal}</p>
  </div>
  `
  }
}
