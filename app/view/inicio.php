<?php
extract($dadosModel);
?>
<main>
  <section id="cabecalho">
    <div class="contreinner">
      <h1>Matheus Santos</h1>
      <h2><?php print_r($areaAtuaçao); ?></h2>
    </div>
  </section>
  <div class="divider_1"></div>
  <section id="portifolio">
    <h2>Portifólio</h2>
    <div class="contreinner">
      <div class="contreinner_portifolio">

        <?php
        $titulosDesign = ['Design para o Dia das Mães', 'Design feito de Estudo', 'Design para Hamburgueria'];
        for ($i = 0; $i < count($titulosDesign); $i++) {
        ?>
          <div class="portifolio">
            <div class="image_portifolio">
              <img src="/app/assets/imgs/designs/design_<?php echo $i; ?>.jpg" alt="<?php echo $titulosDesign[$i]; ?>" />
            </div>
            <div class="text_portifolio">
              <p><?php echo $titulosDesign[$i]; ?></p>
            </div>
          </div>
        <?php
        }

        $titulosProgramacao = ['Regra de 3', 'Sistema de Login'];
        $links = ["$URL_BASE/portfolio/regra_de_3/", 'https://matheussantos-dev.herokuapp.com/'];
        for ($i = 0; $i < count($titulosProgramacao); $i++) {
        ?><a href="<?php echo $links[$i]; ?>">
            <div class="portifolio">
              <div class="image_portifolio">
                <img src="/app/assets/imgs/programacao/<?php echo $i; ?>.png" alt="<?php echo $titulosProgramacao[$i]; ?>" />
              </div>
              <p><?php echo $titulosProgramacao[$i]; ?></p>
              <p class="link">Clique Aqui !</p>
            </div>
          </a>
        <?php
        }
        ?>
      </div>



      <a href="<?php print_r("$URL_BASE/portfolio/"); ?>"><button>Ver Mais</button></a>
    </div>
  </section>
  <div class="divider_2"></div>
  <section id="sobre">
    <div class="contreinner">
      <div class="foto_minha">
        <img src="/app/assets/imgs/fotoMinha.png" alt="Foto Minha" />
      </div>
      <div class="texto">
        <div>
          <h2>Matheus Santos</h2>
        </div>
        <div>
          <p>
            <?php print_r($textoPagInicial); ?>
          </p>
          <a href="<?php print_r("$URL_BASE/sobre/"); ?>"><button>Ver Mais</button></a>
        </div>
      </div>
    </div>
  </section>
  <div class="divider_1"></div>
  <section id="tecnologias">
    <div class="contreinner">
      <div>
        <h2>Tecnologias</h2>
      </div>
      <div class="contreinnerCards">
        <div class="card html">
          <div class="subCard">
            <div class="circulo">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="iconLanguage">
              <svg xmlns="http://www.w3.org/2000/svg" aria-label="HTML5" viewBox="0 0 512 512">
                <path fill="#e34f26" d="M71 460L30 0h451l-41 460-185 52" />
                <path fill="#ef652a" d="M256 472l149-41 35-394H256" />
                <path fill="#ebebeb" d="M256 208h-75l-5-58h80V94H114l15 171h127zm-1 147l-63-17-4-45h-56l7 89 116 32z" />
                <path fill="#fff" d="M255 208v57h70l-7 73-63 17v59l116-32 16-174zm0-114v56h137l5-56z" />
              </svg>
            </div>
            <p>50%</p>
          </div>
          <p>Intermediário</p>
        </div>
        <div class="card css">
          <div class="subCard">
            <div class="circulo">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="iconLanguage">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                <path fill="#1572B6" d="M18.814 114.123l-10.054-112.771h110.48l-10.064 112.754-45.243 12.543-45.119-12.526z" />
                <path fill="#33A9DC" d="M64.001 117.062l36.559-10.136 8.601-96.354h-45.16v106.49z" />
                <path fill="#fff" d="M64.001 51.429h18.302l1.264-14.163h-19.566v-13.831h34.681999999999995l-.332 3.711-3.4 38.114h-30.95v-13.831z" />
                <path fill="#EBEBEB" d="M64.083 87.349l-.061.018-15.403-4.159-.985-11.031h-13.882l1.937 21.717 28.331 7.863.063-.018v-14.39z" />
                <path fill="#fff" d="M81.127 64.675l-1.666 18.522-15.426 4.164v14.39l28.354-7.858.208-2.337 2.406-26.881h-13.876z" />
                <path fill="#EBEBEB" d="M64.048 23.435v13.831000000000001h-33.407999999999994l-.277-3.108-.63-7.012-.331-3.711h34.646zM64.001 51.431v13.831000000000001h-15.209l-.277-3.108-.631-7.012-.33-3.711h16.447z" />
              </svg>
            </div>
            <p>40%</p>
          </div>
          <p>Intermediário</p>
        </div>
        <div class="card js">
          <div class="subCard">
            <div class="circulo">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="iconLanguage">
              <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 256">
                <path fill="#F7DF1E" d="M0 0h256v256H0V0z" />
                <path d="M67.312 213.932l19.59-11.856c3.78 6.701 7.218 12.371 15.465 12.371 7.905 0 12.89-3.092 12.89-15.12v-81.798h24.057v82.138c0 24.917-14.606 36.259-35.916 36.259-19.245 0-30.416-9.967-36.087-21.996M152.381 211.354l19.588-11.341c5.157 8.421 11.859 14.607 23.715 14.607 9.969 0 16.325-4.984 16.325-11.858 0-8.248-6.53-11.17-17.528-15.98l-6.013-2.58c-17.357-7.387-28.87-16.667-28.87-36.257 0-18.044 13.747-31.792 35.228-31.792 15.294 0 26.292 5.328 34.196 19.247L210.29 147.43c-4.125-7.389-8.591-10.31-15.465-10.31-7.046 0-11.514 4.468-11.514 10.31 0 7.217 4.468 10.14 14.778 14.608l6.014 2.577c20.45 8.765 31.963 17.7 31.963 37.804 0 21.654-17.012 33.51-39.867 33.51-22.339 0-36.774-10.654-43.819-24.574" />
              </svg>
            </div>
            <p>30%</p>
          </div>
          <p>Intermediário</p>
        </div>
        <div class="card php">
          <div class="subCard">
            <div class="circulo">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="iconLanguage">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="2500" height="2500" viewBox="0 0 192.756 192.756">
                <path fill="#6e81b6" d="M96.378 138.287c45.673 0 82.698-18.764 82.698-41.909s-37.025-41.909-82.698-41.909c-45.672 0-82.698 18.764-82.698 41.909s37.026 41.909 82.698 41.909z" />
                <path fill="#fff" fill-rule="evenodd" d="M113.131 109.924l4.102-21.112c.926-4.765.156-8.319-2.287-10.565-2.367-2.173-6.385-3.23-12.283-3.23h-7.104l2.032-10.46a1.344 1.344 0 0 0-1.319-1.602h-9.805c-.644 0-1.197.457-1.32 1.089L80.79 86.457c-.396-2.522-1.372-4.69-2.934-6.479-2.876-3.292-7.425-4.961-13.522-4.961H45.33c-.644 0-1.197.457-1.32 1.088l-8.817 45.368c-.077.395.026.801.282 1.111.255.311.635.49 1.038.49h9.882c.644 0 1.197-.457 1.32-1.09l2.133-10.973h7.356c3.86 0 7.104-.418 9.636-1.242 2.589-.842 4.972-2.27 7.072-4.236 1.697-1.559 3.099-3.305 4.178-5.188l-1.761 9.064c-.077.395.026.803.282 1.111.255.311.636.49 1.038.49h9.805c.644 0 1.197-.457 1.32-1.088l4.839-24.903h6.728c2.867 0 3.707.571 3.936.816.207.224.637 1.013.154 3.5l-3.9 20.073a1.347 1.347 0 0 0 1.32 1.601h9.961a1.341 1.341 0 0 0 1.319-1.085zM67.673 92.48c-.616 3.165-1.776 5.422-3.45 6.709-1.7 1.311-4.419 1.975-8.082 1.975h-4.38l3.167-16.298h5.663c4.16 0 5.836.889 6.509 1.634.933 1.034 1.131 3.103.573 5.98zM154.432 79.978c-2.875-3.292-7.424-4.961-13.521-4.961h-19.004c-.645 0-1.197.457-1.32 1.088l-8.816 45.368c-.078.395.025.801.281 1.111s.637.49 1.037.49h9.883c.645 0 1.197-.457 1.32-1.09l2.133-10.973h7.357c3.861 0 7.102-.418 9.635-1.242 2.59-.842 4.973-2.27 7.072-4.236 1.752-1.609 3.193-3.418 4.285-5.371s1.875-4.131 2.332-6.475c1.123-5.781.224-10.393-2.674-13.709zm-9.621 12.502c-.617 3.165-1.777 5.422-3.449 6.709-1.701 1.311-4.42 1.975-8.082 1.975h-4.381l3.166-16.298h5.664c4.16 0 5.836.889 6.51 1.634.931 1.034 1.13 3.103.572 5.98z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M60.591 83.521c3.754 0 6.257.693 7.508 2.079 1.25 1.386 1.548 3.766.894 7.137-.684 3.511-2 6.017-3.95 7.519s-4.918 2.252-8.902 2.252h-6.012l3.69-18.987h6.772zm-24.079 38.208h9.882l2.345-12.061h8.465c3.735 0 6.808-.393 9.22-1.178s4.605-2.1 6.578-3.947c1.656-1.521 2.996-3.201 4.022-5.037 1.025-1.836 1.753-3.861 2.184-6.076 1.046-5.378.257-9.567-2.365-12.567-2.621-3.001-6.792-4.501-12.509-4.501H45.33l-8.818 45.367zM86.466 64.3h9.805l-2.344 12.062h8.736c5.494 0 9.287.958 11.373 2.875 2.086 1.917 2.711 5.024 1.877 9.319l-4.102 21.112h-9.961l3.9-20.074c.443-2.284.281-3.841-.49-4.672-.771-.83-2.412-1.246-4.92-1.246h-7.836l-5.051 25.992h-9.805L86.466 64.3zM137.729 83.521c3.754 0 6.256.693 7.508 2.079 1.25 1.386 1.547 3.766.893 7.137-.682 3.511-1.998 6.017-3.949 7.519-1.949 1.502-4.918 2.252-8.9 2.252h-6.012l3.689-18.987h6.771zm-24.081 38.208h9.883l2.344-12.061h8.465c3.736 0 6.809-.393 9.221-1.178s4.605-2.1 6.578-3.947c1.656-1.521 2.996-3.201 4.021-5.037s1.754-3.861 2.186-6.076c1.045-5.378.256-9.567-2.365-12.567-2.623-3.001-6.793-4.501-12.51-4.501h-19.004l-8.819 45.367z" clip-rule="evenodd" />
              </svg>
            </div>
            <p>60%</p>
          </div>
          <p>Básico</p>
        </div>
        <div class="card postgresql">
          <div class="subCard">
            <div class="circulo">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="iconLanguage">
              <svg xmlns="http://www.w3.org/2000/svg" width="2424" height="2500" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 264">
                <path d="M255.008 158.086c-1.535-4.649-5.556-7.887-10.756-8.664-2.452-.366-5.26-.21-8.583.475-5.792 1.195-10.089 1.65-13.225 1.738 11.837-19.985 21.462-42.775 27.003-64.228 8.96-34.689 4.172-50.492-1.423-57.64C233.217 10.847 211.614.683 185.552.372c-13.903-.17-26.108 2.575-32.475 4.549-5.928-1.046-12.302-1.63-18.99-1.738-12.537-.2-23.614 2.533-33.079 8.15-5.24-1.772-13.65-4.27-23.362-5.864-22.842-3.75-41.252-.828-54.718 8.685C6.622 25.672-.937 45.684.461 73.634c.444 8.874 5.408 35.874 13.224 61.48 4.492 14.718 9.282 26.94 14.237 36.33 7.027 13.315 14.546 21.156 22.987 23.972 4.731 1.576 13.327 2.68 22.368-4.85 1.146 1.388 2.675 2.767 4.704 4.048 2.577 1.625 5.728 2.953 8.875 3.74 11.341 2.835 21.964 2.126 31.027-1.848.056 1.612.099 3.152.135 4.482.06 2.157.12 4.272.199 6.25.537 13.374 1.447 23.773 4.143 31.049.148.4.347 1.01.557 1.657 1.345 4.118 3.594 11.012 9.316 16.411 5.925 5.593 13.092 7.308 19.656 7.308 3.292 0 6.433-.432 9.188-1.022 9.82-2.105 20.973-5.311 29.041-16.799 7.628-10.86 11.336-27.217 12.007-52.99.087-.729.167-1.425.244-2.088l.16-1.362 1.797.158.463.031c10.002.456 22.232-1.665 29.743-5.154 5.935-2.754 24.954-12.795 20.476-26.351" />
                <path fill="#336791" d="M237.906 160.722c-29.74 6.135-31.785-3.934-31.785-3.934 31.4-46.593 44.527-105.736 33.2-120.211-30.904-39.485-84.399-20.811-85.292-20.327l-.287.052c-5.876-1.22-12.451-1.946-19.842-2.067-13.456-.22-23.664 3.528-31.41 9.402 0 0-95.43-39.314-90.991 49.444.944 18.882 27.064 142.873 58.218 105.422 11.387-13.695 22.39-25.274 22.39-25.274 5.464 3.63 12.006 5.482 18.864 4.817l.533-.452c-.166 1.7-.09 3.363.213 5.332-8.026 8.967-5.667 10.541-21.711 13.844-16.235 3.346-6.698 9.302-.471 10.86 7.549 1.887 25.013 4.561 36.813-11.958l-.47 1.885c3.144 2.519 5.352 16.383 4.982 28.952-.37 12.568-.617 21.197 1.86 27.937 2.479 6.74 4.948 21.905 26.04 17.386 17.623-3.777 26.756-13.564 28.027-29.89.901-11.606 2.942-9.89 3.07-20.267l1.637-4.912c1.887-15.733.3-20.809 11.157-18.448l2.64.232c7.99.363 18.45-1.286 24.589-4.139 13.218-6.134 21.058-16.377 8.024-13.686h.002" />
                <path fill="#FFF" d="M108.076 81.525c-2.68-.373-5.107-.028-6.335.902-.69.523-.904 1.129-.962 1.546-.154 1.105.62 2.327 1.096 2.957 1.346 1.784 3.312 3.01 5.258 3.28.282.04.563.058.842.058 3.245 0 6.196-2.527 6.456-4.392.325-2.336-3.066-3.893-6.355-4.35M196.86 81.599c-.256-1.831-3.514-2.353-6.606-1.923-3.088.43-6.082 1.824-5.832 3.659.2 1.427 2.777 3.863 5.827 3.863.258 0 .518-.017.78-.054 2.036-.282 3.53-1.575 4.24-2.32 1.08-1.136 1.706-2.402 1.591-3.225" />
                <path fill="#FFF" d="M247.802 160.025c-1.134-3.429-4.784-4.532-10.848-3.28-18.005 3.716-24.453 1.142-26.57-.417 13.995-21.32 25.508-47.092 31.719-71.137 2.942-11.39 4.567-21.968 4.7-30.59.147-9.463-1.465-16.417-4.789-20.665-13.402-17.125-33.072-26.311-56.882-26.563-16.369-.184-30.199 4.005-32.88 5.183-5.646-1.404-11.801-2.266-18.502-2.376-12.288-.199-22.91 2.743-31.704 8.74-3.82-1.422-13.692-4.811-25.765-6.756-20.872-3.36-37.458-.814-49.294 7.571-14.123 10.006-20.643 27.892-19.38 53.16.425 8.501 5.269 34.653 12.913 59.698 10.062 32.964 21 51.625 32.508 55.464 1.347.449 2.9.763 4.613.763 4.198 0 9.345-1.892 14.7-8.33a529.832 529.832 0 0 1 20.261-22.926c4.524 2.428 9.494 3.784 14.577 3.92.01.133.023.266.035.398a117.66 117.66 0 0 0-2.57 3.175c-3.522 4.471-4.255 5.402-15.592 7.736-3.225.666-11.79 2.431-11.916 8.435-.136 6.56 10.125 9.315 11.294 9.607 4.074 1.02 7.999 1.523 11.742 1.523 9.103 0 17.114-2.992 23.516-8.781-.197 23.386.778 46.43 3.586 53.451 2.3 5.748 7.918 19.795 25.664 19.794 2.604 0 5.47-.303 8.623-.979 18.521-3.97 26.564-12.156 29.675-30.203 1.665-9.645 4.522-32.676 5.866-45.03 2.836.885 6.487 1.29 10.434 1.289 8.232 0 17.731-1.749 23.688-4.514 6.692-3.108 18.768-10.734 16.578-17.36zm-44.106-83.48c-.061 3.647-.563 6.958-1.095 10.414-.573 3.717-1.165 7.56-1.314 12.225-.147 4.54.42 9.26.968 13.825 1.108 9.22 2.245 18.712-2.156 28.078a36.508 36.508 0 0 1-1.95-4.009c-.547-1.326-1.735-3.456-3.38-6.404-6.399-11.476-21.384-38.35-13.713-49.316 2.285-3.264 8.084-6.62 22.64-4.813zm-17.644-61.787c21.334.471 38.21 8.452 50.158 23.72 9.164 11.711-.927 64.998-30.14 110.969a171.33 171.33 0 0 0-.886-1.117l-.37-.462c7.549-12.467 6.073-24.802 4.759-35.738-.54-4.488-1.05-8.727-.92-12.709.134-4.22.692-7.84 1.232-11.34.663-4.313 1.338-8.776 1.152-14.037.139-.552.195-1.204.122-1.978-.475-5.045-6.235-20.144-17.975-33.81-6.422-7.475-15.787-15.84-28.574-21.482 5.5-1.14 13.021-2.203 21.442-2.016zM66.674 175.778c-5.9 7.094-9.974 5.734-11.314 5.288-8.73-2.912-18.86-21.364-27.791-50.624-7.728-25.318-12.244-50.777-12.602-57.916-1.128-22.578 4.345-38.313 16.268-46.769 19.404-13.76 51.306-5.524 64.125-1.347-.184.182-.376.352-.558.537-21.036 21.244-20.537 57.54-20.485 59.759-.002.856.07 2.068.168 3.735.362 6.105 1.036 17.467-.764 30.334-1.672 11.957 2.014 23.66 10.111 32.109a36.275 36.275 0 0 0 2.617 2.468c-3.604 3.86-11.437 12.396-19.775 22.426zm22.479-29.993c-6.526-6.81-9.49-16.282-8.133-25.99 1.9-13.592 1.199-25.43.822-31.79-.053-.89-.1-1.67-.127-2.285 3.073-2.725 17.314-10.355 27.47-8.028 4.634 1.061 7.458 4.217 8.632 9.645 6.076 28.103.804 39.816-3.432 49.229-.873 1.939-1.698 3.772-2.402 5.668l-.546 1.466c-1.382 3.706-2.668 7.152-3.465 10.424-6.938-.02-13.687-2.984-18.819-8.34zm1.065 37.9c-2.026-.506-3.848-1.385-4.917-2.114.893-.42 2.482-.992 5.238-1.56 13.337-2.745 15.397-4.683 19.895-10.394 1.031-1.31 2.2-2.794 3.819-4.602l.002-.002c2.411-2.7 3.514-2.242 5.514-1.412 1.621.67 3.2 2.702 3.84 4.938.303 1.056.643 3.06-.47 4.62-9.396 13.156-23.088 12.987-32.921 10.526zm69.799 64.952c-16.316 3.496-22.093-4.829-25.9-14.346-2.457-6.144-3.665-33.85-2.808-64.447.011-.407-.047-.8-.159-1.17a15.444 15.444 0 0 0-.456-2.162c-1.274-4.452-4.379-8.176-8.104-9.72-1.48-.613-4.196-1.738-7.46-.903.696-2.868 1.903-6.107 3.212-9.614l.549-1.475c.618-1.663 1.394-3.386 2.214-5.21 4.433-9.848 10.504-23.337 3.915-53.81-2.468-11.414-10.71-16.988-23.204-15.693-7.49.775-14.343 3.797-17.761 5.53-.735.372-1.407.732-2.035 1.082.954-11.5 4.558-32.992 18.04-46.59 8.489-8.56 19.794-12.788 33.568-12.56 27.14.444 44.544 14.372 54.366 25.979 8.464 10.001 13.047 20.076 14.876 25.51-13.755-1.399-23.11 1.316-27.852 8.096-10.317 14.748 5.644 43.372 13.315 57.129 1.407 2.521 2.621 4.7 3.003 5.626 2.498 6.054 5.732 10.096 8.093 13.046.724.904 1.426 1.781 1.96 2.547-4.166 1.201-11.649 3.976-10.967 17.847-.55 6.96-4.461 39.546-6.448 51.059-2.623 15.21-8.22 20.875-23.957 24.25zm68.104-77.936c-4.26 1.977-11.389 3.46-18.161 3.779-7.48.35-11.288-.838-12.184-1.569-.42-8.644 2.797-9.547 6.202-10.503.535-.15 1.057-.297 1.561-.473.313.255.656.508 1.032.756 6.012 3.968 16.735 4.396 31.874 1.271l.166-.033c-2.042 1.909-5.536 4.471-10.49 6.772z" />
              </svg>
            </div>
            <p>80%</p>
          </div>
          <p>Básico</p>
        </div>
      </div>
    </div>
  </section>
  <div class="divider_2"></div>
  <section id="tecnologias">
    <div class="contreinner">
      <div>
        <h2>Ferramentas</h2>
      </div>
      <div class="contreinnerCards">
        <div class="card photoshop">
          <div class="subCard">
            <div class="circulo">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="iconLanguage">
              <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 512 512" version="1" viewBox="0 0 512 512">
                <path fill="#00C8FF" d="M93.867,12.8h326.016C470.547,12.8,512,54.253,512,104.918v314.965C512,470.547,470.547,512,419.883,512
                    H92.118C41.453,512,0,470.547,0,419.882V106.667C0,54.933,42.134,12.8,93.867,12.8" />
                <path fill="#001D26" d="M98.133,34.133h317.482c41.45,0,75.051,33.601,75.051,75.051v306.431c0,41.45-33.602,75.051-75.051,75.051
                    H96.384c-41.45,0-75.051-33.601-75.051-75.051V110.933C21.333,68.267,55.466,34.133,98.133,34.133" />
                <path fill="#FFF" d="M341.146,233.353c-16.816,0-21.861,8.408-21.861,15.135c0,6.727,4.204,12.612,26.275,24.384
                      c32.792,15.765,43.722,31.11,43.722,53.812c0,33.633-25.224,52.131-60.539,52.131c-15.122,0.671-30.167-2.512-43.722-9.249
                      c-1.682-0.841-1.682-1.682-1.682-3.363v-31.11c0-1.682,0.841-2.522,2.522-1.682c12.437,8.315,27.081,12.708,42.041,12.612
                      c16.816,0,23.543-6.727,23.543-15.765c0-7.567-5.255-14.294-26.276-25.224c-29.429-14.294-42.041-28.588-42.041-52.971
                      c0-26.906,21.02-49.608,57.806-49.608c12.875-0.52,25.728,1.479,37.837,5.886c1.579,0.582,2.388,2.334,1.806,3.914
                      c-0.036,0.099-0.078,0.196-0.124,0.29v28.588c0,1.682-0.841,2.522-3.363,1.682c-10.967-6.006-23.232-9.253-35.735-9.459H341.146z
                       M263.37,216.537c0,53.812-38.678,76.514-86.604,76.514h-15.765v80.718c0.189,1.204-0.634,2.334-1.839,2.522
                      c-0.227,0.036-0.457,0.036-0.684,0h-33.212c-1.204,0.189-2.334-0.634-2.522-1.839c-0.036-0.227-0.036-0.457,0-0.684l0.841-227.02
                      c0-1.682,3.363-2.522,5.255-2.522c13.453-0.841,33.633-0.841,53.812-0.841C240.458,143.386,263.37,175.337,263.37,216.537z
                       M225.113,216.537c0-26.906-16.816-40.359-44.563-40.359c-6.738-0.24-13.485,0.042-20.18,0.841v81.559h16.816
                      C201.781,258.578,225.113,250.17,225.113,216.537z" />
                <path fill="#00C8FF" d="M341.146,233.353c-16.816,0-21.861,8.408-21.861,15.135c0,6.727,4.204,12.612,26.275,24.384
                      c32.792,15.765,43.722,31.11,43.722,53.812c0,33.633-25.224,52.131-60.539,52.131c-15.122,0.671-30.167-2.512-43.722-9.249
                      c-1.682-0.841-1.682-1.682-1.682-3.363v-31.11c0-1.682,0.841-2.522,2.522-1.682c12.437,8.315,27.081,12.708,42.041,12.612
                      c16.816,0,23.543-6.727,23.543-15.765c0-7.567-5.255-14.294-26.276-25.224c-29.429-14.294-42.041-28.588-42.041-52.971
                      c0-26.906,21.02-49.608,57.806-49.608c12.875-0.52,25.728,1.479,37.837,5.886c1.579,0.582,2.388,2.334,1.806,3.914
                      c-0.036,0.099-0.078,0.196-0.124,0.29v28.588c0,1.682-0.841,2.522-3.363,1.682c-10.967-6.006-23.232-9.253-35.735-9.459H341.146z
                       M263.37,216.537c0,53.812-38.678,76.514-86.604,76.514h-15.765v80.718c0.189,1.204-0.634,2.334-1.839,2.522
                      c-0.227,0.036-0.457,0.036-0.684,0h-33.212c-1.204,0.189-2.334-0.634-2.522-1.839c-0.036-0.227-0.036-0.457,0-0.684l0.841-227.02
                      c0-1.682,3.363-2.522,5.255-2.522c13.453-0.841,33.633-0.841,53.812-0.841C240.458,143.386,263.37,175.337,263.37,216.537z
                       M225.113,216.537c0-26.906-16.816-40.359-44.563-40.359c-6.738-0.24-13.485,0.042-20.18,0.841v81.559h16.816
                      C201.781,258.578,225.113,250.17,225.113,216.537z" opacity=".15" />
              </svg>
            </div>
            <p>100%</p>
          </div>
          <p>Básico</p>
        </div>
        <div class="card vscode">
          <div class="subCard">
            <div class="circulo">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="iconLanguage">
              <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="100" height="100">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M70.9119 99.3171C72.4869 99.9307 74.2828 99.8914 75.8725 99.1264L96.4608 89.2197C98.6242 88.1787 100 85.9892 100 83.5872V16.4133C100 14.0113 98.6243 11.8218 96.4609 10.7808L75.8725 0.873756C73.7862 -0.130129 71.3446 0.11576 69.5135 1.44695C69.252 1.63711 69.0028 1.84943 68.769 2.08341L29.3551 38.0415L12.1872 25.0096C10.589 23.7965 8.35363 23.8959 6.86933 25.2461L1.36303 30.2549C-0.452552 31.9064 -0.454633 34.7627 1.35853 36.417L16.2471 50.0001L1.35853 63.5832C-0.454633 65.2374 -0.452552 68.0938 1.36303 69.7453L6.86933 74.7541C8.35363 76.1043 10.589 76.2037 12.1872 74.9905L29.3551 61.9587L68.769 97.9167C69.3925 98.5406 70.1246 99.0104 70.9119 99.3171ZM75.0152 27.2989L45.1091 50.0001L75.0152 72.7012V27.2989Z" fill="white" />
                </mask>
                <g mask="url(#mask0)">
                  <path d="M96.4614 10.7962L75.8569 0.875542C73.4719 -0.272773 70.6217 0.211611 68.75 2.08333L1.29858 63.5832C-0.515693 65.2373 -0.513607 68.0937 1.30308 69.7452L6.81272 74.754C8.29793 76.1042 10.5347 76.2036 12.1338 74.9905L93.3609 13.3699C96.086 11.3026 100 13.2462 100 16.6667V16.4275C100 14.0265 98.6246 11.8378 96.4614 10.7962Z" fill="#0065A9" />
                  <g filter="url(#filter0_d)">
                    <path d="M96.4614 89.2038L75.8569 99.1245C73.4719 100.273 70.6217 99.7884 68.75 97.9167L1.29858 36.4169C-0.515693 34.7627 -0.513607 31.9063 1.30308 30.2548L6.81272 25.246C8.29793 23.8958 10.5347 23.7964 12.1338 25.0095L93.3609 86.6301C96.086 88.6974 100 86.7538 100 83.3334V83.5726C100 85.9735 98.6246 88.1622 96.4614 89.2038Z" fill="#007ACC" />
                  </g>
                  <g filter="url(#filter1_d)">
                    <path d="M75.8578 99.1263C73.4721 100.274 70.6219 99.7885 68.75 97.9166C71.0564 100.223 75 98.5895 75 95.3278V4.67213C75 1.41039 71.0564 -0.223106 68.75 2.08329C70.6219 0.211402 73.4721 -0.273666 75.8578 0.873633L96.4587 10.7807C98.6234 11.8217 100 14.0112 100 16.4132V83.5871C100 85.9891 98.6234 88.1786 96.4586 89.2196L75.8578 99.1263Z" fill="#1F9CF0" />
                  </g>
                  <g style="mix-blend-mode: overlay" opacity="0.25">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M70.8511 99.3171C72.4261 99.9306 74.2221 99.8913 75.8117 99.1264L96.4 89.2197C98.5634 88.1787 99.9392 85.9892 99.9392 83.5871V16.4133C99.9392 14.0112 98.5635 11.8217 96.4001 10.7807L75.8117 0.873695C73.7255 -0.13019 71.2838 0.115699 69.4527 1.44688C69.1912 1.63705 68.942 1.84937 68.7082 2.08335L29.2943 38.0414L12.1264 25.0096C10.5283 23.7964 8.29285 23.8959 6.80855 25.246L1.30225 30.2548C-0.513334 31.9064 -0.515415 34.7627 1.29775 36.4169L16.1863 50L1.29775 63.5832C-0.515415 65.2374 -0.513334 68.0937 1.30225 69.7452L6.80855 74.754C8.29285 76.1042 10.5283 76.2036 12.1264 74.9905L29.2943 61.9586L68.7082 97.9167C69.3317 98.5405 70.0638 99.0104 70.8511 99.3171ZM74.9544 27.2989L45.0483 50L74.9544 72.7012V27.2989Z" fill="url(#paint0_linear)" />
                  </g>
                </g>
                <defs>
                  <filter id="filter0_d" x="-8.39411" y="15.8291" width="116.727" height="92.2456" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset />
                    <feGaussianBlur stdDeviation="4.16667" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="overlay" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                  </filter>
                  <filter id="filter1_d" x="60.4167" y="-8.07558" width="47.9167" height="116.151" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset />
                    <feGaussianBlur stdDeviation="4.16667" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="overlay" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                  </filter>
                  <linearGradient id="paint0_linear" x1="49.9392" y1="0.257812" x2="49.9392" y2="99.7423" gradientUnits="userSpaceOnUse">
                    <stop stop-color="white" />
                    <stop offset="1" stop-color="white" stop-opacity="0" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <p>100%</p>
          </div>
          <p>Básico</p>
        </div>
        <div class="card github">
          <div class="subCard">
            <div class="circulo">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="iconLanguage">
              <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                <path fill="#fff" d="M12,2.2467A10.00042,10.00042,0,0,0,8.83752,21.73419c.5.08752.6875-.21247.6875-.475,0-.23749-.01251-1.025-.01251-1.86249C7,19.85919,6.35,18.78423,6.15,18.22173A3.636,3.636,0,0,0,5.125,16.8092c-.35-.1875-.85-.65-.01251-.66248A2.00117,2.00117,0,0,1,6.65,17.17169a2.13742,2.13742,0,0,0,2.91248.825A2.10376,2.10376,0,0,1,10.2,16.65923c-2.225-.25-4.55-1.11254-4.55-4.9375a3.89187,3.89187,0,0,1,1.025-2.6875,3.59373,3.59373,0,0,1,.1-2.65s.83747-.26251,2.75,1.025a9.42747,9.42747,0,0,1,5,0c1.91248-1.3,2.75-1.025,2.75-1.025a3.59323,3.59323,0,0,1,.1,2.65,3.869,3.869,0,0,1,1.025,2.6875c0,3.83747-2.33752,4.6875-4.5625,4.9375a2.36814,2.36814,0,0,1,.675,1.85c0,1.33752-.01251,2.41248-.01251,2.75,0,.26251.1875.575.6875.475A10.0053,10.0053,0,0,0,12,2.2467Z" />
              </svg>
            </div>
            <p>100%</p>
          </div>
          <p>Básico</p>
        </div>
        <div class="card git">
          <div class="subCard">
            <div class="circulo">
              <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
              </svg>
            </div>
            <div class="iconLanguage">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 97 97">
                <g>
                  <path fill="#F05133" d="M92.71,44.408L52.591,4.291c-2.31-2.311-6.057-2.311-8.369,0l-8.33,8.332L46.459,23.19
		c2.456-0.83,5.272-0.273,7.229,1.685c1.969,1.97,2.521,4.81,1.67,7.275l10.186,10.185c2.465-0.85,5.307-0.3,7.275,1.671
		c2.75,2.75,2.75,7.206,0,9.958c-2.752,2.751-7.208,2.751-9.961,0c-2.068-2.07-2.58-5.11-1.531-7.658l-9.5-9.499v24.997
		c0.67,0.332,1.303,0.774,1.861,1.332c2.75,2.75,2.75,7.206,0,9.959c-2.75,2.749-7.209,2.749-9.957,0c-2.75-2.754-2.75-7.21,0-9.959
		c0.68-0.679,1.467-1.193,2.307-1.537V36.369c-0.84-0.344-1.625-0.853-2.307-1.537c-2.083-2.082-2.584-5.14-1.516-7.698
		L31.798,16.715L4.288,44.222c-2.311,2.313-2.311,6.06,0,8.371l40.121,40.118c2.31,2.311,6.056,2.311,8.369,0L92.71,52.779
		C95.021,50.468,95.021,46.719,92.71,44.408z" />
                </g>
              </svg>
            </div>
            <p>60%</p>
          </div>
          <p>Básico</p>
        </div>
      </div>
    </div>
  </section>
  <div class="divider_1"></div>
  <section id="contato">
    <div class="contreinner">
      <div class="titulo_contato">
        <h2>Me Mande Uma Mensagem 😉</h2>
      </div>
      <form action="https://api.staticforms.xyz/submit" method="post" id="form">
        <input type="hidden" name="accessKey" value="7f43e03a-61ff-4a20-a647-ef65ef5fff00" required />
        <input type="hidden" name="redirectTo" value="<?php print_r("$URL_BASE"); ?>" />

        <input id="nome" type="text" name="name" class="campo" placeholder="Digite seu Nome" required />
        <input id="email" type="email " name="email" class="campo" placeholder="Digite seu Melhor Email" required />
        <textarea id="msg" name="message" class="campo" placeholder="Digite sua Mensagem Aqui..." required></textarea>
        <button type="submit" value="Submit">Enviar mensagem</button>
      </form>
    </div>
  </section>
</main>