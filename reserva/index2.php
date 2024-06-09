<?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php");
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>WYD-ZRO</title>

  <!-- Stylesheets -->
  
  <link href="css/style.css" rel="stylesheet">

  <!-- Scripts -->
  <script src="https://kit.fontawesome.com/6e9e880184.js" crossorigin="anonymous"></script>
  <script type='text/javascript'>
    // Se houver scripts adicionais, podem ser incluídos aqui
  </script>

  <!-- Inline CSS -->
 
</head>

<?php
$URL_ATUAL = basename($_SERVER['PHP_SELF'], ".php");
?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">


        <li class="hvr-float"><a id="hover" href="index.php"><i class="fas fa-home"></i> HOME</a></li>

        <li class="hvr-float"><a id="hover" href="noticia.php"><i class=" fas fa-newspaper"></i></fas> NOTÍCIAS</a></li>


        <!-- SEM PAGINA !-->
        <li class="hvr-float"><a id="hover" href="cadastro.php"><i class="fas fa-user-plus"></i> CRIAR CONTA</a></li>

        <li class="hvr-float"><a id="hover" href="alterarsenha.php"><i class="fas fa-pen"></i> ALTERAR SENHA</a></li>

        <!-- Adicione essa linha após o item de "ALTERAR SENHA" -->

        <li class="hvr-float"><a id="hover" href="rankingp.php"><i class="fas fa-list"></i> RANKING PLAYER</a></li>



        <li class="hvr-float"><a id="hover" href="downloads.php"><i class="fas fa-file-download"></i> DOWNLOADS</a></li>

        <li class="hvr-float"><a id="hover" href="https://discord.gg/XggNTXSx" target="_blank"><i class="fab fa-discord"></i> DISCORD</a></li>




      </ul>
    </div>
  </div>
  </div>
</nav>

<body>

 
  <main>
  <div class="cor-estendida">
    <section class="hero">

      <header class="hero-conteudo">
        <span class="destaque marrom">novidade</span>
        <h1>WYD-ZRO O COMEÇO DO SEU DESTINO!! </h1>
        <hr/>
        <h2 class="hero-subtitulo">Data: 14/12/2023 - 19hrs <br>

          Prepare-se para uma experiência única e exclusiva!
          
          Estamos emocionados em anunciar o beta teste do nosso tão aguardado WYD.</h2>
      </header>

      <div class="hero-container-imagens">
        <figure><img src="./img/bbbb.jpg"/></figure>
        <!--<figure><img src="assets/image-8.png"/></figure>
        <figure><img src="assets/image-9.png"/></figure>
        <figure><img src="assets/image-10.png"/></figure>
        <figure><img src="assets/image-11.png"/></figure>
        <figure><img src="assets/image-12.png"/></figure>
        <figure><img src="assets/image-13.png"/></figure>
        <figure><img src="assets/image-14.png"/></figure>
        <figure><img src="assets/image-15.png"/></figure>
        <figure><img src="assets/image-16.png"/></figure>
        <figure><img src="assets/image-17.png"/></figure>
        <figure><img src="assets/image-18.png"/></figure>-->

      </div>
    </section>
</div>
  <section class="botao-container">
    <button id="button-hover" type="button"><img src="assets/chevrons-down.svg"/></button>
  </section>








  <section class="ultimas-noticias">
    <header class="ultimas-noticias-cabecalho">
      <span class="destaque marrom">Atualizações</span>
      <h2 class="ultimas-noticias-titulo">Confira as ultimas atualizações</h2>
      <p class="ultimas-noticias-subtitulo"> Dê uma olhada</p>
    </header>
    <div class="noticia-card-container">
      <div class="noticia-card">
        <header class="noticia-card-cabecalho">
          <div class="noticia-card-cabecalho-detalhes">
          <span class="destaque amarelo">EVENTO - 12/12/2012</span>
          <h3 class="noticia-titulo">Evento de Drop</h3>
        </div>
        <!--<p class="extraordinario">Extraordinário 4/4 </p>-->
        </header>
        <p class="noticia-descricao">Vá até o NPC que esta localizado em armia próximo ao Aki. Clique no NPC EVENTO que será direcionado para o local do evento.</p>


        <!--Aqui pode colocar as fotos dos ADM-->
        <div class="noticias-adm">
          <img src="assets/tk.jpg"/>
           <span class="noticia-adm-nome"> [ADM] TK-ZRO</span>
        </div>
      </div>

      <div class="noticia-card">
        <header class="noticia-card-cabecalho">
          <div class="noticia-card-cabecalho-detalhes">
          <span class="destaque amarelo">Informações sobre o servidor:</span>
          <h3 class="noticia-titulo">Versão: 7.59</h3>
        </div>
          <!--<p class="extraordinario">Extraordinário 4/4 </p>-->
        </header>
        <p class="noticia-descricao">Rate: Médium/Médium.<br>Classes balanceadas.<br>Double XP todo fim de semana ás 22hrs.<br>Eventos.semanais: pvp, procure o [GM], troca.</p>


        <!--Aqui pode colocar as fotos dos ADM-->
        <div class="noticias-adm">
          <img src="assets/bm.jpg"/>
           <span class="noticia-adm-nome"> [ADM] BM-ZRO</span>
        </div>
      </div>

      <div class="noticia-card">
        <header class="noticia-card-cabecalho">
          <div class="noticia-card-cabecalho-detalhes">
          <span class="destaque amarelo">Droplist</span>
          <h3 class="noticia-titulo">Temos droplist in-game!</h3>
        </div>
         <!--<p class="extraordinario">Extraordinário 4/4 </p>-->
        </header>
        <p class="noticia-descricao">Para acessar a droplist in-game digite [X] e clique em DROPLIST. Após isso, escolha a opção desejada e verifique os drops de cada monstro.</p>


        <!--Aqui pode colocar as fotos dos ADM-->
        <div class="noticias-adm">
          <img src="assets/ht.jpg"/>
           <span class="noticia-adm-nome"> [ADM] HT-ZRO</span>
        </div>
      </div>

      <div class="noticia-card">
        <header class="noticia-card-cabecalho">
          <div class="noticia-card-cabecalho-detalhes">
          <span class="destaque amarelo">Redes Sociais</span>
          <h3 class="noticia-titulo">Sigam nossas redes sociais:</h3>
        </div>
          <!--<p class="extraordinario">Extraordinário 4/4 </p>-->
        </header>
        <p class="noticia-descricao">Instagram:<br>Facebook:<br>Youtube:<br>WhatsApp:</p>


        <!--Aqui pode colocar as fotos dos ADM-->
        <div class="noticias-adm">
          <img src="assets/fm.jpg"/>
           <span class="noticia-adm-nome"> [ADM] FM-ZRO</span>
        </div>
      </div>

      

      
    </div>
  </section>

</main>
  <!-- Conteúdo da página -->



  <!-- Scripts no final da página para melhor desempenho -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>

  <!-- Outros scripts específicos podem ser incluídos aqui -->

  <script>
    // Scripts específicos para esta página podem ser adicionados aqui
  </script>


</body>

<style>
  footer {
    text-align: center;
    padding: 10px;
    background-color: #222;
    color: #fff;
    position: fixed;
    bottom: 0;
    width: 100%;
  }
</style>

<footer>

  <p>&copy; 2023 WYD-ZRO</p>

</footer>


</html>