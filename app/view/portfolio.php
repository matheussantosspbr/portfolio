<main>
  <section id="portifolio">
    <h2>Portifólio</h2>
    <div class="contreinner">
      <h3>Design</h3>
      <div class="contreinnerDesign">
        <?php
        $titulosDesign = ['Design para o Dia das<br>Mães', 'Design feito de Estudo', 'Design para<br>Hamburgueria'];
        for ($i = 0; $i <= 2; $i++) {
        ?>
          <div class="projeto">
            <figure>
              <img src="/app/assets/imgs/designs/design_<?php echo $i; ?>.jpg" alt="<?php echo $titulosDesign[$i]; ?>" />
            </figure>
            <p><?php echo $titulosDesign[$i]; ?></p>
          </div>
        <?php
        }
        ?>
      </div>
      <h3>Programação</h3>
      <div class="contreinnerProgramacao">
        <?php
        $titulosProgramacao = ['Regra de 3'];
        for ($i = 0; $i < 1; $i++) {
        ?><a href="https://matheussantos.herokuapp.com/portfolio/regra_de_3/">
            <div class="projeto">
              <figure>
                <img src="/app/assets/imgs/programacao/<?php echo $i; ?>.png" alt="<?php echo $titulosProgramacao[$i]; ?>" />
              </figure>
              <p><?php echo $titulosProgramacao[$i]; ?></p>
              <p style="font-size:1rem; margin-top:5px;">Clique Aqui !</p>
          </a>
      </div>
    <?php
        }
    ?>
    </div>
    </div>
  </section>
</main>