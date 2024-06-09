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
    <title>Downloads</title>

    <!-- Stylesheets -->
    
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
			padding: 15px;


		}

#hover:hover{
    color: white;
    text-decoration: underline;
}
    </style>
</head>

<?php
$URL_ATUAL = basename($_SERVER['PHP_SELF'], ".php");
?>

<style>
    .panel {
    margin-bottom: 21px;
    background-color: #303030;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.05);
    box-shadow: 0 1px 1px rgba(0,0,0,0.05);
    padding:50px;
}

.btn-success {
    color: #ffffff;
    background-color: #00bc8c;
    border-color: #00bc8c;
    padding:2rem;
}

.btn-block {
    display: flex;
	align-items: center;
	padding-left: 2px;
	
    width: 100%;
    margin-bottom: 2rem;
}

.panel-title {
    margin-top: 0;
    margin-bottom: 20px;
    font-size: 20px;
    color: inherit;
}

.img-teste{
	margin-right: 15px;
    margin-left: 20px;
    padding-bottom: 2px;
   
	
} 
</style>
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
<body>

    <style>
        body{
            background-color: #181012;
        }

        .header-topo-cor{
			background-color: #222;
		}
    </style>
    <!-- Conteúdo da página de download -->
    <div class="container">
        <!--<div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Clique no link de download abaixo:</h3>
            </div>
            <div class="panel-body">
                <a href="https://www.mediafire.com/file/fkm4lp142vpopxs/WYD-ZRO_-_ONLINE.zip" class="btn btn-success btn-lg btn-primary btn-block"  target="_blank">
                    <img src="img/download.png" width="35" height="35" class="img-teste"> WYD WOK - Download
                </a>
            </div>

            <div class="panel-body">
                <a href="https://www.mediafire.com/file/fkm4lp142vpopxs/WYD-ZRO_-_ONLINE.zip" class="btn btn-success btn-lg btn-primary btn-block"  target="_blank">
                    <img src="img/mediafire.png" width="35" height="35" class="img-teste"> WYD WOK - Download
                </a>
            </div>

            <div class="panel-body">
                <a href="https://www.mediafire.com/file/fkm4lp142vpopxs/WYD-ZRO_-_ONLINE.zip" class="btn btn-success btn-lg btn-primary btn-block"  target="_blank">
                    <img src="img/mediafire.png" width="35" height="35" class="img-teste"> WYD WOK - Download
                </a>
            </div>

        </div>-->

              <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Clique no link de download abaixo:</h3>
          </div>
          <div class="panel-body">
              <a href="https://www.mediafire.com/file/fkm4lp142vpopxs/WYD-ZRO_-_ONLINE.zip" class="btn btn-success btn-lg btn-primary btn-block"  target="_blank">
                  <i class="fas fa-download"style="margin: 0px 15px 0px 15px; font-size: 25px" ></i> WYD WOK - Google Drive Client.zip
              </a>
          </div>

          <div class="panel-body">
              <a href="https://www.mediafire.com/file/fkm4lp142vpopxs/WYD-ZRO_-_ONLINE.zip" class="btn btn-success btn-lg btn-primary btn-block"  target="_blank">
                  <i class="fas fa-download" style="margin: 0px 15px 0px 15px; font-size: 25px"></i> WYD WOK - 4shared Client
              </a>
          </div>

          <div class="panel-body">
              <a href="https://www.mediafire.com/file/fkm4lp142vpopxs/WYD-ZRO_-_ONLINE.zip" class="btn btn-success btn-lg btn-primary btn-block"  target="_blank">
                  <i class="fas fa-download" style="margin: 0px 15px 0px 15px; font-size: 25px"></i> WYD - WOK Mega Client
              </a>
          </div>
        </div>
        <!-- Outros links de download podem ser adicionados aqui -->
    </div>



    <!-- Scripts no final da página -->
    <!-- ... -->

    <script>
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const menu = document.querySelector("nav");

  menuToggle.addEventListener("click", function () {
    menu.classList.toggle("active");
  });
});
</script>


</body>
<style>
        .container{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 70px; /* Ajuste conforme necessário */
    }
     footer {
    text-align: center;
    padding: 10px;
    background-color: #222;
    color: #fff;
    position: fixed;
    bottom: 0;
    width: 100%;
  }

  /* icone noticia */
.fa-file-noticia::before {
  content: "\1F4F0"; /* Código Unicode do emoji do jornal */
  font-size: 24px; /* Tamanho do emoji */
}


  body{
      overflow: hidden;
    }
</style>

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