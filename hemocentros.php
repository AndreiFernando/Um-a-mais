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
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Um A+</title>
</head>

<body>

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
        <!--final menu hamburguer-->


        <section id="slider">
            <div class="sangues">
                <div class="hemo">
                    <h2 id="titulos">Ache o local próximo de você!</h2>
                    <div class="hemocentros">
                        <p id="titulo2">Hospital Estadual Mário Covas</p>
                        <p>Rua Dr. Henrique Calderazzo, 321</p>
                        <p>Santo André – SP – Tel: 2829-5162 / 2829-5144</p>
                        <p>Segunda a sábado das 7h30 às 15h00 (exceto feriado)</p>
                        <p>O atendimento é limitado a 180 candidatos aos sábados </p>
                        <p>Estacionamento gratuito no local</p>
                        <a href="https://www.google.com.br/maps/place/R.+Dr.+Henrique+Calderazzo,+321+-+Para%C3%ADso,+Santo+Andr%C3%A9+-+SP,+09190-615/@-23.6708545,-46.5351504,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce4267270bb4bf:0xa63bf5cada9c631a!8m2!3d-23.6708594!4d-46.5329617"
                            target="_blank">Ver mapa</a>
                    </div>
                    <div class="hemocentros">
                        <p id="titulo2">Hemocentro Regional São Bernardo do Campo – Colsan</p>
                        <p>Rua Pedro Jacobucci, 440 – Jardim das Américas</p>
                        <p>São Bernardo do Campo – SP -Tel: 4332-3900</p>
                        <p>Segunda a sábado das 8h às 15h30 (exceto feriados)</p>
                        <a href="https://www.google.com.br/maps/place/R.+Pedro+Jacobucci,+440+-+Jardim+das+Americas,+S%C3%A3o+Bernardo+do+Campo+-+SP,+09725-750/@-23.6988809,-46.5576701,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce43ccdaf27d2d:0x341f13d0c1c59e2a!8m2!3d-23.6988858!4d-46.5554814"
                            target="_blank">Ver mapa</a>
                    </div>
                    <div class="hemocentros">
                        <p id="titulo2">Núcleo Regional de Hemoterapia Dr. Aguinaldo Quaresma</p>
                        <p>Rua Peri, 361 – Oswaldo Cruz</p>
                        <p>São Caetano do Sul – SP – Tel: 4227-1083</p>
                        <p>Segunda a sábado das 8h às 12h (exceto feriados)</p>
                        <a href="https://www.google.com.br/maps/place/R.+Peri,+361+-+Osvaldo+Cruz,+S%C3%A3o+Caetano+do+Sul+-+SP,+09540-290/@-23.6249228,-46.5665787,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5cdb37d5bdd7:0x82dae583df5038ec!8m2!3d-23.6249277!4d-46.56439"
                            target="_blank">Ver mapa</a>
                    </div>
                    <div class="hemocentros">
                        <p id="titulo2">Hospital Municipal Dr. Carmino Caricchio – Tatuapé</p>
                        <p>Al.Rodrigo de Brum, 1989</p>
                        <p>São Paulo – SP – Tel: 2545-4652</p>
                        <p>Segunda a sábado das 8h às 13h (exceto feriados)</p>
                        <a href="https://www.google.com.br/maps/place/Alameda+Rodrigo+de+Brum,+1989+-+Ermelino+Matarazzo,+S%C3%A3o+Paulo+-+SP,+03807-230/@-23.4998314,-46.4746298,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce61048385955d:0x9a8577d5835d13c6!8m2!3d-23.4998363!4d-46.4724411"
                            target="_blank">Ver mapa</a>
                    </div>
                    <div class="hemocentros">
                        <p id="titulo2">Hospital do Servidor Público Municipal – Aclimação</p>
                        <p>R. Castro Alves, 60 – 4º andar</p>
                        <p>São Paulo – SP – Tel: 3277-5303</p>
                        <p>Segunda a sábado das 8h às 13h (exceto feriados)</p>
                        <a href="https://www.google.com.br/maps/place/R.+Castro+Alves,+60+-+4%C2%BA+andar+-+Aclima%C3%A7%C3%A3o,+S%C3%A3o+Paulo+-+SP,+01532-000/@-23.5666157,-46.6414683,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce59a2ffb704df:0x53dec943e307c81d!8m2!3d-23.5666206!4d-46.6392796"
                            target="_blank">Ver mapa</a>
                    </div>
                    <div class="hemocentros">
                        <p id="titulo2">Hospital Municipal Dr. Fernando Mauro P. da Rocha – Campo Limpo</p>
                        <p>Estrada Itapecerica, 1661</p>
                        <p>São Paulo – SP – Tel: 5812-1379</p>
                        <p>Segunda a sábado das 8h às 13h (exceto feriados)</p>
                        <a href="https://www.google.com.br/maps/place/Estr.+de+Itapecerica,+1661+-+Vila+Maracana,+S%C3%A3o+Paulo+-+SP,+05835-005/@-23.6488526,-46.7510212,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce53df1511afcd:0x8316f027405af369!8m2!3d-23.6488575!4d-46.7488325"
                            target="_blank">Ver mapa</a>
                    </div>
                    <div class="hemocentros">
                        <p id="titulo2">Posto Stella Maris</p>
                        <p>R. Maria Cândida Pereira, 568 – Itapegica</p>
                        <p>Guarulhos – SP – Tel: 0000-0000</p>
                        <p>Segunda a sábado das 8h às 13h (exceto feriados)</p>
                        <a href="https://www.google.com.br/maps/place/R.+Maria+C%C3%A2ndida+Pereira,+568+-+Vila+Sao+Joao,+Guarulhos+-+SP,+07041-020/@-23.4786616,-46.55371,17z/data=!3m1!4b1!4m5!3m4!1s0x94cef57ef70f8e71:0x15fa597179d936d3!8m2!3d-23.4786665!4d-46.5515213"
                            target="_blank">Ver mapa</a>
                    </div>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d58532.27307654733!2d-46.725787449238794!3d-23.522894964637715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shemocentros!5e0!3m2!1spt-BR!2sbr!4v1665418984018!5m2!1spt-BR!2sbr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

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

        <script src="./js/script.js"></script>
    </body>

</html>