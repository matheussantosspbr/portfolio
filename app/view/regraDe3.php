<main>
  <section id="cabecalho">
    <div class="contreinner">
      <div id="cabecalho_titulo">
        <h1>Regra de 3</h1>
      </div>
      <div class="div_image">
        <?php
        for ($i = 1; $i < 5; $i++) {
        ?>
          <div class="images">
            <label for="">Opção <?php echo $i ?></label>
            <img src="/www.matheussantosdev.com/app/assets/imgs/regrade3/<?php echo $i ?>.png" />
          </div>
        <?php
        }
        ?>
      </div>
      <div id="contreinner_select">
        <select class="select" id="regra">
          <option value="0" selected>Selecione</option>
          <option value="1">Opção 1</option>
          <option value="2">Opção 2</option>
          <option value="3">Opção 3</option>
          <option value="4">Opção 4</option>
        </select>

        <button onclick="enviar()">Enviar</button>
      </div>

      <div id="res"></div>
      <div id="res_conta"></div>
    </div>
  </section>
</main>