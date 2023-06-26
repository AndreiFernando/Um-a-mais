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
    <main>
      <h3>Informações adicionais</h3>
      <h3>Queremos te conhecer melhor!!! </h3>
      <h3>Para completar seu cadastro, preencha mais alguns dados.</h3>
      <br>


      <form class="documentos forms" method="post" action="inserir-endereco.php">
        <fieldset class="campoCpf">
        <input type="hidden" name="id_client" value="<?=$_GET["client"]?>">
          <legend>Endereço</legend>
          <Input class="cadastro" type="text" id="CPF" name="endereco" 
            placeholder="Digite endereço">
        </fieldset>
        <fieldset class="campoRg">
          <legend>Número</legend>
          <Input class="cadastro" type="number" id="RG" name="numero" placeholder="Digite o número da residência">
        </fieldset>
        <fieldset class="campoRg">
          <legend>Cidade</legend>
          <Input class="cadastro" type="text" id="RG" name="cidade" placeholder="Digite a sua cidade">
        </fieldset>    
        <fieldset class="campoRg">
          <legend>Cep</legend>
          <Input class="cadastro" type="number" id="RG" name="cep" placeholder="Digite o cep">
        </fieldset> 
        <fieldset class="campoRg">
          <legend>UF</legend>
        <Input class="cadastro" type="text" id="RG" name="uf" placeholder="Digite a UF">
        </fieldset>     



        <button onclik="Login" class="validarcadastro">Continue</button>
      </form>

      <br>
      <h4 class="termo">Ao continuar, aceito os termos de uso, <a href="#">Codições gerais </a> e <a href="#">Politica de
          Privacidade</a></h4>
     
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
  </footer>
  <!--fim footer-->
  <script src="./js/script.js"></script>
</body>

</html>