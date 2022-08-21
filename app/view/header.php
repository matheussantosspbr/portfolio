<?php
$caminhoLogo = __DIR__ . '/../../assets/logo/logo.png';
?>
<header id="header">
  <nav class="contreinner">
    <img src=<?php echo $caminhoLogo; ?> alt="logo" />
    <div class="menu">
      <ul>
        <li><a href="https://matheussantos.herokuapp.com/">Inicio</a></li>
        <li><a href="https://matheussantos.herokuapp.com/portifolio/">Portifólio</a></li>
        <li><a href="https://matheussantos.herokuapp.com/certificados/">Certificados</a></li>
        <li><a href="https://matheussantos.herokuapp.com/sobre/">Sobre</a></li>
      </ul>
    </div>
    <div class="open">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="menu_open" viewBox="0 0 30 30">
        <path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"></path>
      </svg>
    </div>
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48" class="menu_close">
        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
      </svg>
    </div>
  </nav>
</header>