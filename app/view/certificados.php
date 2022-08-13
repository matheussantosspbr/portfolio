<main>
  <section id="cabecalho">
    <div class="contreinner">
      <h1>Certificados</h1>
    </div>
  </section>
  <section id="certificados">
    <div class="contreinner">
      <?php
      $nomeCertificado = ['Lógica de Programação Essencial', 'Aprenda o que são Estrutura de Dados e Algoritmos', 'Introdução a Criação de Site com HTML5 e CSS3', 'Introdução ao JavaScript', 'JavaScript', 'Introdução ao PHP', 'IDE Instalação e Configuração (Visual Studio Code)', 'Projeto PicPro'];
      $horas = ['4 Horas', '2 Horas', '6 Horas', '3 Horas', '40 Horas', '4 Horas', '1 Hora', '30 Horas'];

      for ($i = 0; $i < 8; $i++) {
      ?>
        <div class="certificado">
          <div class="img_certificado">
            <img src="/www.matheussantosdev.com/app/assets/imgs/certificados/<?php echo $i; ?>.png" alt="<?php echo $nomeCertificado[$i]; ?>" />
          </div>
          <div class=" texto">
            <h3><?php echo $nomeCertificado[$i]; ?></h3>
            <h4>[ <?php echo $horas[$i]; ?> ]</h4>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section>
</main>