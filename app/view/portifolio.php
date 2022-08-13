<main>
  <section id="portifolio">
    <h2>Portifólio</h2>
    <div class="contreinner">
      <h3>Design</h3>
      <div class="contreinnerDesign">
        <?php
        $titulosPortifolio = ['Design para o Dia das Mães', 'Design feito de Estudo', 'Design para Hamburgueria'];
        for ($i = 0; $i <= 2; $i++) {
        ?>
          <div class="projeto">
            <figure>
              <img src="/www.matheussantosdev.com/app/assets/imgs/designs/design_<?php echo $i; ?>.jpg" alt="<?php echo $titulosPortifolio[$i]; ?>" />
            </figure>
            <p><?php echo $titulosPortifolio[$i]; ?></p>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
</main>