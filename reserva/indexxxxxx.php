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
  
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  <link href="css/landing-page.css" rel="stylesheet">
  

  <!-- Scripts -->
  <script src="https://kit.fontawesome.com/6e9e880184.js" crossorigin="anonymous"></script>
  <script type='text/javascript'>
    // Se houver scripts adicionais, podem ser incluídos aqui
  </script>

  <!-- Inline CSS -->
  <style>
    .navbar-default {
      background-color: #222;
      border-color: transparent;
      font-size: 18px;
      padding: 15px;
    }

      /* código abaixotrava a barra de rolagem*/
      
   /* body {
      overflow: hidden;
    }*/

    /* icone noticia */


  </style>
</head>

<?php
$URL_ATUAL = basename($_SERVER['PHP_SELF'], ".php");
?>
 <header>  
<nav class="navbar navbar-default">

    
    z
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
</nav>
  </header>
<body>

  <style>
@import url('https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background-color: #222 ;
    color:#fff;
}

html{
    font-family: Inter, sans-serif;
    font-weight: 500;
}

a{
    text-decoration: none;
}

ul{
    list-style: none;
}

nav{
    max-width: 1120px;
    margin: auto;
    padding: 1.5rem 10rem;

    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}



.menu{
    display: flex;
    flex-direction: row;
    gap: 1.5rem;
    color:#FFF2E7;
}

.discord{
    color: #FFF2E7;
    font-weight: 600;
}

main{
    display: flex;
    flex-direction: column;

}

.cor-estendida{
    background-color: #181012;
}

.hero{

    max-width: 1120px;
    height: 60vh;

    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    
    gap:6rem;

    padding:0rem 2rem;
    margin: auto;

    overflow: clip;
    
}

.hero-conteudo{
    display: flex;
    flex-direction: column;
    gap:1rem;
}

.destaque{
    padding-bottom: 0.5rem;
    font-family: Epilogue;
    font-size: 1rem ;
    font-weight: 500;
    text-transform: uppercase;
}

.marrom{
    color: #A45A49
}

.amarelo{
    color: #E7A80E;
}

h1{
    font-size: 3.5rem ;
    font-family: Montserrat;
    font-weight: 800;
}

hr{
    color: #A45A49;
}

.hero-subtitulo{
color: #C7BAB3;
font-family: Inter;
font-size: 1.5rem;
font-weight: 400;

}

.hero-container-imagens{
    width: 100%;
    column-count: 4;
    column-gap: 1rem;
    margin: -1rem;
    
    
}



.hero-container-imagens > figure > img{
max-width: 1120px;
width: 450%;/*altere aqui para imagem ficar legal*/
height: 300px; /*altere aqui para imagem ficar legal*/
border-radius: 0.5rem;

}




.botao-container{
    width: 100%;
    max-width: 1120px; 
    margin: auto;
    transform:translate("0, -50%")

}


button{
    border: none;
    padding: 1rem;
    border-radius: 0.5rem;

    background-color: rgb(36, 4, 4);
}

.ultimas-noticias{
    display: flex;
    flex-direction: column;
    max-width: 1120px;
    padding: 3rem 2rem;
    margin: auto;

}

.ultimas-noticias-cabecalho{
    display: flex;
    flex-direction: column;
    gap: 0.5rem;

}

.ultimas-noticias-titulo{
font-family: Montserrat;
font-size: 2rem;
font-weight: 700;
color:#FFF2E7;

}

.ultimas-noticias-subtitulo{
    color: #C7BAB3;

    font-family: Inter;
    font-size: 1rem;
    font-weight: 400;
}

.noticia-card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  
  .noticia-card {
    background-color: #241a1c;
    padding: 2rem;
    border-radius: 0.5rem;
    flex-basis: calc(50% - 1rem); /* Dois cards por linha com um espaçamento entre eles */
    margin-top: 2rem;
    box-sizing: border-box; /* Garante que o padding não aumente a largura */
  }

.noticia-card-cabecalho{

    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: end;
}

.noticia-card-cabecalho-detalhes{
    display: flex;
    flex-direction: column;
    gap:0.5rem;
}

.noticia-titulo{
    color: #FFF2E7;
    font-family: Montserrat;
    font-size: 1.5rem;
    font-weight: 700;
}

.extraordinario{
    color: #756A67;
    font-family: Inter;
    font-size: 1rem;
    font-style: normal;
    font-weight: 500;
}

.noticia-descricao{
    color: #C7BAB3;
    font-family: Inter;
    font-size: 1rem;
    font-weight: 400;
    padding: 1rem;
}

.noticias-adm{
    display: flex;
    flex-direction: row;
    align-content: center;
    gap:0.5rem;
}

.noticias-adm > img{
    border-radius: 20rem;
    width: 1.5rem;
}

.noticia-adm-nome{
    color: #C7BAB3;
    
    font-family: Inter;
    font-size: 1rem;
    font-weight: 600;
}



footer{
    padding:4rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
    background-color: #23181a;
    
}

.footer-copy{
    color: #FFF2E7;

    font-family: Inter;
    font-size: 1rem;
    font-weight: 500;
}

.footer-adm{
    color: rgba(255, 242, 231, 0.50);
    font-family: Inter;
    font-size: 1rem;
    font-weight: 500;
}








  </style>
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