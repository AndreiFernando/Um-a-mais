<?php

include_once("config/conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="doação de sangue">
  <meta name="keywords" content="sangue, vida, pontos, parceiros">
  <meta name="author" content="Allan Lopes, Andrei Fernando, Vinicius">
  <script src="https://kit.fontawesome.com/46de3b630b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/estilo.css">
  <!--ícones-->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!--Jquery-->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/swiper-bundle.min.css">
  <title>Um A+</title>

</head>
<!--Inicio cabeçalho-->

<body>
  <nav> <a href="index.html"><img src="./img/LogoUmA+.png" alt="LogoUmA+"></a>
    <div class="navbar1">
      <ul>
        <li><a href="index.html">home</a></li>
        <li><a href="quemsomos.html">quem somos</a></li>
        <li><a href="suportefaq.html">suporte/FAQ</a></li>
        <li><a href="acesso.html">minha conta</a></li>
      </ul>

    </div>
    <!--menu hamburguer-->
    <div class="navigation">
      <div id="menu" onclick="onClickMenu()">
        <div id="bar1" class="bar"></div>
        <div id="bar2" class="bar"></div>
        <div id="bar3" class="bar"></div>
      </div>
      <ul class="menunav" id="nav">
        <li><a href="index.html">home</a></li>
        <li><a href="quemsomos.html">quem somos</a></li>
        <li><a href="parceiros.html">parceiros</a></li>
        <li><a href="hemocentros.html">hemocentros</a></li>
        <li><a href="configuracoes.html">configurações</a></li>
        <li><a href="contato.html">contatos</a></li>
        <li><a href="suportefaq.html">suporte/FAQ</a></li>
        <li><a href="acesso.html">minha conta</a></li>

      </ul>
    </div>
  </nav>
  <!--fim cabeçalho-->

  <header>
    <main id="corp">
      <br>
      <br>
      <div class="sangues">
        <div class="linha1">
          <i class='fas fa-user-circle'></i>
          <div class="nomeUser"><?php echo"Olá, ".$_SESSION["NOME_USUARIO"]."!"?></div>
          <p class="pontos1">1.500</p>
          <i class='got fas fa-droplet'></i>
        </div>

        <div class="linha4_1">
          <i class="market4_1 fas fa-duotone fa-store"></i>
          <H3 class="nomeUser">Lojinha Um A+ </H3>
          <i onclik="Login" class='market4_1_2 fas fa-chevron-circle-left'><a href="minhaConta.html"></a></i>
        </div>
      </div>
      <div class="faixa_loja_parceiros">
        <h1 id="nomeUser2">PRODUTOS <img class="logo-rodape" src="./img/LogoUmA+.png"></h1>
      </div>
      <div class="titulos3">
        <br>
        <h2 id="titulo3_1">Produtos exclusivos do "Um A+" que são a sua cara!!!:</h2>
      </div>
      <div class="slide-container swiper">
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">

            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/Caneca 2.png" alt="Caneca 2" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Caneca Um A+ <br /> 1000 pontos</h2>
                <p class="descricao"> Caneca de Porcelana; Cor: Interior e Alça Verde Escuro; Tamanho: 325 ml;
                  Dimensões: 95x80mm </p>
              </div>
            </div>

            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/Squeeze.png" alt="squeeze 1" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Squeeze Um A+ <br /> 1000 Pontos</h2>
                <p class="descricao"> squeeze de alumínio de 750ml com pintura fosca, com tampa plástica rosqueável,
                  alça e tampa protetora para o bocal,
                </p>
              </div>
            </div>

            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/camiseta1.png" alt="camiseta" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Camiseta Um A+ <br /> 2000 pontos</h2>
                <p class="descricao"> Camiseta Branca Lisa Basica 100% Algodão Sublimação Silk Pro
                </p>
              </div>
            </div>

            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/Chaveiro 1.png" alt="Chaveiro 1" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Chaviero Um A+ <br /> 500 pontos</h2>
                <p class="descricao"> Chaveiro em Metal com Formato de Coração</p>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>

      </div>

      <div class="faixa_loja_parceiros">
        <h1 id="nomeUser2">PARCEIROS <img class="logo-rodape" src="./img/LogoUmA+.png"></h1>
      </div>
      <div class="titulos3">
        <br>
        <h2 id="titulo3_1">Descontos de até 70% nos serviços dos parceiros "Um A+":</h2>
      </div>

      <div class="slide-container swiper">
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper">
            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/cinemark.png" alt="logo da cinemark" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Cinemark</h2>
                <p class="descricao"> É uma empresa transnacional especializada em operar complexos cinematográficos
                  multiplex. Internacionalmente, a Cinemark está presente em diversos países da América Latina.</p>
              </div>
            </div>
            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/catavento.jfif" alt="logo da cinemark" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Catavento</h2>
                <p class="descricao"> O Museu Catavento é um museu interativo, inaugurado em 2009 com o propósito de se
                  dedicar às ciências e sua divulgação e está localizado no Palácio das Indústrias, em São Paulo,
                  Brasil.
                </p>
              </div>
            </div>
            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/99.jpg" alt="logo da cinemark" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">99</h2>
                <p class="descricao"> A 99 é um aplicativo de transporte individual de passageiros. Com um cadastro na
                  plataforma, é possível solicitar uma corrida para um motorista parceiro que esteja por perto.
                </p>
              </div>
            </div>
            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/alura.png" alt="logo da cinemark" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Alura</h2>
                <p class="descricao"> Alura é uma plataforma de educação à distância, que oferece cursos de tecnologia,
                  e
                  conta atualmente com 1277 cursos e mais lançamentos semanais e atualizações. </p>
              </div>
            </div>
            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/masp.jpg" alt="logo da cinemark" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Masp</h2>
                <p class="descricao"> O Museu de Arte de São Paulo é um museu privado sem fins lucrativos, fundado em
                  1947
                  pelo empresário e mecenas Assis Chateaubriand (1892-1968), tornando-se o primeiro museu moderno no
                  país.
                </p>
              </div>
            </div>
            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/senac.png" alt="logo da cinemark" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Senac</h2>
                <p class="descricao"> Desde 1946, o Serviço Nacional de Aprendizagem Comercial – Senac é o principal
                  agente de educação profissional voltado para o Comércio de Bens, Serviços e Turismo do País.</p>
              </div>
            </div>
            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/ticket360.jpg" alt="logo da cinemark" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Ticket360</h2>
                <p class="descricao"> A Ticket360 é uma empresa nacional especializada na venda, administração e
                  distribuição de ingressos para shows, peças de teatro e mais.</p>
              </div>
            </div>
            <div id="card" class="swiper-slide">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="img/uber.png" alt="logo da cinemark" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name">Uber</h2>
                <p class="descricao"> A Uber é um aplicativo de transporte individual de passageiros. Com um cadastro na
                  plataforma, é possível solicitar uma corrida para um motorista parceiro que esteja por perto.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>

      </div>


    </main>

  </header>

  <!--Inicio footer-->

  <footer>
    <div class="row">
      <div class="col">
        <img class="logo-rodape" src="./img/LogoUmA+.png">
        <p>Você é o tipo certo de alguém!</p>
      </div>
      <div class="col">
        <h3>um a+ <div class="underline"><span></span></div>
        </h3>
        <p>São Paulo - SP</p>
        <p>Rua Tito, 54</p>
        <p class="email-id">uma+@uma+.com.br</p>
        <h4>(00)00000-0000</h4>
      </div>
      <div class="col">
        <h3>Acesse <div class="underline"><span></span></div>
        </h3>
        </h3>
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li><a href="./quemsomos.html">Quem somos</a></li>
          <li><a href="./hemocentros.html">Hemocentros</a></li>
          <li><a href="./suportefaq.html">FAQ</a></li>
          <li><a href="./cadastro1.html">Cadastre-se</a></li>
        </ul>
      </div>
      <div class="col">
        <h3>Notícias <div class="underline"><span></span></div>
        </h3>
        </h3>
        <article class="noticias">
          <i class="fa-regular fa-envelope"></i>
          <input type="email" placeholder="acesse com seu e-mail" required>
          <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
        </article>
        <div class="redes-sociais">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-whatsapp"></i>
        </div>
      </div>
    </div>
    <hr>
    <div class="politicas">
      <span class="copyright_text">Copyright @2022 | Todos os direitos reservados</span>
      <span class="policy_terms">
        <a href="#">Politica de privacidade</a>
        <a href="#">Termos e condições</a>
      </span>
    </div>
  </footer>
  <!--fim footer-->
  <script src="./js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".slide-content", {
      slidesPerView: 2,
      spaceBetween: 25,
      loop: true,
      centerSlide: 'true',
      fade: 'true',
      grabCursor: 'true',
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        520: {
          slidesPerView: 2,
        },
        950: {
          slidesPerView: 5,
        },
      },
    });
  </script>
</body>

</html>