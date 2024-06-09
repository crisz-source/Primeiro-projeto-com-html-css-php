<?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php");
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Notícias - WOK</title>

  <!-- Stylesheets -->
  
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  <link href="css/style.css" rel="stylesheet">

  
   <!-- css responsivo -->
   <link href="css/media.css" rel="stylesheet">

<!--icone do button-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">

  <!--icone de login e cadeado-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
      padding: 25px;
    }

    body {
     
      background-color: #181012;
    }

    .header-topo-cor{
			background-color: #222;
		}
    </style>


</head>

<?php
$URL_ATUAL = basename($_SERVER['PHP_SELF'], ".php");
?>

<!-- menu de navegação -->
<header class="header-topo-cor">
    
    <button class='bx bx-menu bx-spin bx-rotate-90' id="menu-toggle"></button>
    <hr/>
    <nav>
  <a class="sublim-amarelo" href="index.php"><span>WYD WOK</span></a>
  <ul class="menu">
  <li><a class="sublim-amarelo" href="index.php"><i class="fas fa-home"></i> Home</a></li>
<li><a class="sublim-amarelo" href="noticia.php"><i class="fas fa-newspaper"></i> Notícias</a></li>
<li><a class="sublim-amarelo" href="downloads.php"><i class="fas fa-download"></i> Downloads</a></li>

    <li class="informacoes">
      <a class="sublim-amarelo" href="#">Informações <span class="seta">&#9660;</span></a>
      <ul class="submenu">
      <li class="right-column"><a href="doacao.html">Doação</a></li>
      <li class="right-column"><a href="rankingp.php">Ranking</a></li>
        <li class="left-column"><a href="composicao.html">Composições</a></li>
        <li class="left-column"><a href="droplist.html">DropList</a></li>
        <li class="left-column"><a href="#">Guia do Novato</a></li>
        <li class="left-column"><a href="#">Bônus Semanal</a></li>
        <li class="right-column"><a href="cronograma.html">Cronograma</a></li>
        <!--<li class="right-column"><a href="https://wydwok.com.br/site/paginas/ativarcash">Comandos</a></li>-->
        <li class="right-column"><a href="regras.html">Regras</a></li>
      </ul>
    </li>
    <li><a class="sublim-amarelo" href="cadastro.php"><i class="fas fa-user-plus"></i><span class="hover-text"> Criar Conta</span></a></li>
    <li><a class="sublim-amarelo" href="alterarsenha.php"><i class="fas fa-key"></i> Alterar Senha</a></li>
    <li><a class="sublim-amarelo" href="https://discord.gg/UmQRf6FT9C" target="_blank"><i class="fab fa-discord"></i></a></li>
  </ul>
</nav>
<style>
.submenu {
    display: none;
    position: absolute;
    width: 240px;
    padding: 1px;
    margin-top: 3.55px;
    display: flex;
    flex-wrap: wrap;
    visibility: hidden;
    z-index: 1; /* Definindo um z-index maior */
    background-color:rgb(49, 2, 49) ;

}


</style>
  </header>

<!-- script do botão funcional-->
  <script>
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const menu = document.querySelector("nav");

  menuToggle.addEventListener("click", function () {
    menu.classList.toggle("active");
  });
});
</script>


<body>

  <style>
    .container {
      display: flex;
      align-items: center;
      justify-content: center;

    }



    /* carrosel */
    @keyframes tonext {
      75% {
        left: 0;
      }

      95% {
        left: 100%;
      }

      98% {
        left: 100%;
      }

      99% {
        left: 0;
      }
    }

    @keyframes tostart {
      75% {
        left: 0;
      }

      95% {
        left: -300%;
      }

      98% {
        left: -300%;
      }

      99% {
        left: 0;
      }
    }

    @keyframes snap {
      96% {
        scroll-snap-align: center;
      }

      97% {
        scroll-snap-align: none;
      }

      99% {
        scroll-snap-align: none;
      }

      100% {
        scroll-snap-align: center;
      }
    }


    /*carrosel*/
    main {
      top: 0;
      max-width: 80rem;
      margin: 0 auto;
      padding: 0 1.25rem;
      font-family: 'Lato', sans-serif;

    }

    * {
      box-sizing: border-box;
      scrollbar-color: transparent transparent;
      /* thumb and track color */
      scrollbar-width: 0px;
    }

    *::-webkit-scrollbar {
      width: 0;
    }

    *::-webkit-scrollbar-track {
      background: transparent;
    }

    *::-webkit-scrollbar-thumb {
      background: transparent;
      border: none;
    }

    * {
      -ms-overflow-style: none;
    }

    ol,
    li {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .carousel {
      position: relative;
      padding-top: 550px;
      filter: drop-shadow(0 0 10px #0003);
    
    }


    .carousel__viewport {
      position: absolute;
      top: 45px;
      right: 0;
      bottom: 0px;
      left: 0;
      display: flex;
      overflow-x: scroll;
      counter-reset: item;
      scroll-behavior: smooth;
      scroll-snap-type: x mandatory;

    }

    .carousel__slide {
      position: relative;
      flex: 0 0 100%;
      width: 100%;
      background-color: #f99;
      counter-increment: item;
      height: 200px;
      background-image: url('./chibi_2.jpg');
      background-repeat: no-repeat;
      background-size: auto;
    
    }

    .carousel__slide:nth-child(even) {
      background-color: #99f;
    }

    .carousel__slide:before {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate3d(-50%, -40%, 70px);
      color: #fff;
      font-size: 2em;
    }

    .carousel__snapper {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;

    }

    @media (hover: hover) {
      .carousel__snapper {
        animation-name: tonext, snap;
        animation-timing-function: ease;
        animation-duration: 0s;
        animation-iteration-count: infinite;
      }

      .carousel__slide:last-child .carousel__snapper {
        animation-name: tostart, snap;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .carousel__snapper {
        animation-name: none;
      }
    }

    .carousel:hover .carousel__snapper,
    .carousel:focus-within .carousel__snapper {
      animation-name: none;
    }

    .carousel__navigation {
      position: absolute;
      top: 600px;
      right: 0;
      bottom: 0;
      left: 0;
      text-align: center;

    }

    .carousel__navigation-list,
    .carousel__navigation-item {
      display: inline-block;

    }

    .carousel__navigation-button {
      display: inline-block;
      padding: 10px 12px;
      
      margin: 0 4px;
      background-color: #222;
      color: #fff;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-size: 16px;
      transition: background-color 0.5s ease;
      font-size: 20px;
    }

    .carousel::before,
    .carousel::after,
    .carousel__prev,
    .carousel__next {
      position: absolute;
      top: 0;
      margin-top: 19%;
      width: 4rem;
      height: 4rem;
      transform: translateY(-50%);
      border-radius: 50%;
      font-size: 0;
      outline: 0;
    }


    #hover-ol:hover {
      color: white;
      text-decoration: underline;
    }




    .carousel::before {
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='0,50 80,100 80,0' fill='%23fff'/%3E%3C/svg%3E");
    }

    .carousel::after {
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='100,50 20,100 20,0' fill='%23fff'/%3E%3C/svg%3E");
    }

    /*espaçamento no top do carrosel apartir da 2° pagina */
    .main-top{
      padding-top: 45px;
    }

    /*SLIDES DE NOTÍCIAS */

 .img-slide1{

   /* Define o tamanho do slide */
   width: 100%; /* Ou defina um tamanho específico para o slide */
  height: 400px; /* Ou defina uma altura específica para o slide */

  /* Define a imagem de fundo */
  background-image: url('./img/Imagem do WhatsApp de 2024-04-26 à(s) 18.49.23_d4c10bed.jpg');
  background-repeat: no-repeat;
  background-size: cover; /* Redimensiona a imagem para cobrir todo o slide */
  background-position: center; /* Centraliza a imagem no slide */

 }

 .img-slide2{

   /* Define o tamanho do slide */
   width: 100%; /* Ou defina um tamanho específico para o slide */
  height: 400px; /* Ou defina uma altura específica para o slide */

  /* Define a imagem de fundo */
  background-image: url('./img/background.jpg');
  background-repeat: no-repeat;
  background-size: cover; /* Redimensiona a imagem para cobrir todo o slide */
  background-position: center; /* Centraliza a imagem no slide */

}

.img-slide3{

/* Define o tamanho do slide */
width: 100%; /* Ou defina um tamanho específico para o slide */
height: 400px; /* Ou defina uma altura específica para o slide */

/* Define a imagem de fundo */
background-image: url('./img/images.jpg');
background-repeat: no-repeat;
background-size: contain; /* Redimensiona a imagem para cobrir todo o slide */
background-position: center; /* Centraliza a imagem no slide */
background-color: transparent; /* Ou utilize a cor desejada */
}

.img-slide4{

/* Define o tamanho do slide */
width: 100%; /* Ou defina um tamanho específico para o slide */
height: 400px; /* Ou defina uma altura específica para o slide */

/* Define a imagem de fundo */
background-image: url('./img/wallpa11.jpg');
background-repeat: no-repeat;
background-size: cover; /* Redimensiona a imagem para cobrir todo o slide */
background-position: center; /* Centraliza a imagem no slide */
background-color: transparent; /* Ou utilize a cor desejada */
}

.img-slide5{

/* Define o tamanho do slide */
width: 100%; /* Ou defina um tamanho específico para o slide */
height: 400px; /* Ou defina uma altura específica para o slide */

/* Define a imagem de fundo */
background-image: url('./img/chibi_1.jpg');
background-repeat: no-repeat;
background-size: cover; /* Redimensiona a imagem para cobrir todo o slide */
background-position: center; /* Centraliza a imagem no slide */
background-color: transparent; /* Ou utilize a cor desejada */
}

/* icone noticia */

/* sublinhado no link do meu e mudar a cor de fundo para branco */
.navbar-default .navbar-nav > li > a:hover {
    color: #ffffff;
    text-decoration: underline;
}

.navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 0px;
}

.paragrafo-topo{
  text-align: center;
  font-size: 30px;
}
  </style>

  <!-- Conteúdo da página -->
 <main class="main-top">
  <div class="paragrafo-topo">
   <!-- <p>[NOTÍCIAS]</p> -->
  </div>
  <!--<div class="espacamento-top">
  Noticias
    </div>-->

    <section class="carousel" aria-label="Gallery">
      <ol class="carousel__viewport">
        <li id="carousel__slide1" 
            tabindex="0"
            class="carousel__slide img-slide1">
          <div class="carousel__snapper">

            
          <p style="color: white; padding-top: 420px;">Data: 14/12/2023 - 19hrs
               
               <p>
               
               Prepare-se para uma experiência única e exclusiva!
               </p>

               <p>
               Estamos emocionados em anunciar o beta teste do nosso tão aguardado WYD.
               

               </p>
               

              </p>
               
          </div>

           <!--
        </li>
        
        <li id="carousel__slide2"
            tabindex="0"
            class="carousel__slide img-slide2">

           
          <div class="carousel__snapper">
          <p style="color: white; padding-top: 420px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur debitis eos cum ipsa reiciendis asperiores consequuntur, molestias consectetur, placeat iste similique facilis blanditiis nisi libero tempore exercitationem nobis dolorum. Porro?
                m nobis dolorum. Porro?
                
              </p>
          </div>
          <a href="#carousel__slide1"
             class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide3"
             class="carousel__next">Go to next slide</a>
        </li>
        <li id="carousel__slide3"
            tabindex="0"
            class="carousel__slide img-slide3">

           
          <div class="carousel__snapper">
          <p style="color: white; padding-top: 420px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur debitis eos cum ipsa reiciendis asperiores consequuntur, molestias consectetur, placeat iste similique facilis blanditiis nisi libero tempore exercitationem nobis dolorum. Porro?
                
                
              </p>
          </div>
          <a href="#carousel__slide2"
             class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide4"
             class="carousel__next">Go to next slide</a>
        </li>
        <li id="carousel__slide4"
            tabindex="0"
            class="carousel__slide img-slide4">
           
          <div class="carousel__snapper">
          <p style="color: white; padding-top: 420px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur debitis eos cum ipsa reiciendis asperiores consequuntur, molestias consectetur, placeat iste similique facilis blanditiis nisi libero tempore exercitationem nobis dolorum. Porro?
                
          </div>
          <a href="#carousel__slide3"
             class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide1"
             class="carousel__next">Go to first slide</a>
             
        </li>

        <li id="carousel__slide5"
        tabindex="0"
        class="carousel__slide img-slide5">

      
      <div class="carousel__snapper">
      <p style="color: white; padding-top: 420px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur debitis eos cum ipsa reiciendis asperiores consequuntur, molestias consectetur, placeat iste similique facilis blanditiis nisi libero tempore exercitationem nobis dolorum. Porro?
                
      </div>
      <a href="#carousel__slide5"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide1"
         class="carousel__next">Go to first slide</a>
         
    </li>
      </ol>
      
      <aside class="carousel__navigation">
        <ol class="carousel__navigation-list" >
          <li class="carousel__navigation-item" > 
            
            <a href="#carousel__slide1"
               class="carousel__navigation-button" id="hover-ol">1</a>
          </li>
          <li class="carousel__navigation-item" >
            <a href="#carousel__slide2"
               class="carousel__navigation-button" id="hover-ol">2</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#carousel__slide3"
               class="carousel__navigation-button" id="hover-ol">3</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#carousel__slide4"
               class="carousel__navigation-button" id="hover-ol">4</a>
          </li>

          <li class="carousel__navigation-item">
            <a href="#carousel__slide5"
               class="carousel__navigation-button" id="hover-ol" >5</a>
          </li>

        </ol>
      </aside>
-->
    </section>

  
  </main>

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
footer{
	position: fixed;
        bottom: 0;
        width: 100%;
        padding: 4rem 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #222;
        
    
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

<footer>

  <p>&copy; 2024 WYD WOK</p>

</footer>


</html>