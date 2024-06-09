<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<script language="Javascript" type="text/javascript">
		document.oncontextmenu = function() {
			return false
		}
	</script>
	<title>Cadastro</title>


	<!-- Stylesheets -->


	<script type="text/javascript" src="_include/js/lostsurvivor.js"></script>
	<script type="text/javascript" src="_include/js/lostsurvivor-min.js"></script>
	<link href="css/style.css" rel="stylesheet">

	<!-- css responsivo -->
	<link href="css/media.css" rel="stylesheet">

<!--icone do button-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.0/css/boxicons.min.css">

  <!--icone de login e cadeado-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<script type='text/javascript'>
		var nW, nH, oH, oW;

		function zoomToggle(iWideSmall, iHighSmall, iWideLarge, iHighLarge, whichImage) {
			oW = whichImage.style.width;
			oH = whichImage.style.height;
			if ((oW == iWideLarge) || (oH == iHighLarge)) {
				nW = iWideSmall;
				nH = iHighSmall;
			} else {
				nW = iWideLarge;
				nH = iHighLarge;
			}
			whichImage.style.width = nW;
			whichImage.style.height = nH;
		}
	</script>



	<!-- Stylesheets -->
	

	<!-- Scripts -->
	<script src="https://kit.fontawesome.com/6e9e880184.js" crossorigin="anonymous"></script>
	<script type='text/javascript'>
		// Se houver scripts adicionais, podem ser incluídos aqui
	</script>

	<!-- Inline CSS -->
	<style>
		.container {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.navbar-default {
			background-color: #222;
			border-color: transparent;
			font-size: 18px;
			padding: 15px;


		}
	</style>
</head>




	<?php
	$URL_ATUAL = basename($_SERVER['PHP_SELF'], ".php");
	?>
	
 <!-- menu de navegação -->
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

	<body class="scroll-block">
	
	<div class="main-cadastro">
		<div class="wrapper">
			<span class="cadastro-animacao"></span>
			<span class="cadastro-animacao2"></span>
				<div class="form-box criar-conta">
				
					<h1 class="animacao" style="--i:0;">Criar Conta</h1>


					<form method="POST">
					<div class="input-box animacao">
						<label for="userid">Usuário:</label>
						<input type="text" id="userid" name="userid" maxlength="10">
						<span id="userid-error"></span>
							<i class='bx bxs-user'></i>
					</div>
						
					<div class="input-box animacao " style="--i:1;">
						<label for="password">Senha:</label>
						<input type="password" id="password" name="password" maxlength="10">
						<span id="password-error"></span>
							<i class='bx bxs-lock-alt'></i>
					</div>
		
					<input type="submit" name="submit" value="Criar" class="btn animacao" style="--i:2;  border: none;
    padding: 1rem;
    border-radius: 0.5rem;

     background: linear-gradient(#e0d209, #3e0253, #011727, #0ef );
		  
		" ></input>
						
						
						
						
						<div class="criarreg-link animacao" style="--i:3;">
						<p>Deseja alterar sua senha? <a href="alterarsenha.php" class="" style="color: #9d0ad3de;">Alterar senha</a></p>
					</div>
					
				</div>
			
			<div class="info-text criar-conta">
				<h2 class="animacao" style="--i:0;">Crie sua conta já!</h2>
				<p class="animacao" style="--i:1;">Kersef esta te aguardando com muitas aventuras.</p>
			</div>	
		</form>

		
	
		
		</div>
	</div>
	

	
		<?php
		if (isset($_POST['submit'])) {
			$accdir = "C:\\account";
			$userid = trim($_POST['userid']);
			$password = trim($_POST['password']);
			$initial = substr($userid, 0, 1);
			$userlength = strlen($userid);
			$passlength = strlen($password);

			if (!preg_match("/^[0-9a-zA-Z]{4,10}$/", $userid)) {
				echo "<script>alert('Seu ID de usuário deve ter caracteres de a-z, A-Z, 0-9 e de 4 a 10 dígitos.'); window.location.href = 'http://localhost/cadastro.php';</script>";
				exit();
			}
			if (!preg_match("/^[0-9a-zA-Z]{4,10}$/", $password)) {
				echo "<script>alert('Sua senha deve ter caracteres de a-z, A-Z, 0-9 e de 4 a 10 dígitos.'); window.location.href = 'http://localhost/cadastro.php';</script>";
				exit();
			}
			if (preg_match("/^[a-zA-Z]$/", $initial)) {
				$initial = strtoupper($initial);
			} else {
				$initial = "etc";
			}
			if (file_exists("$accdir\\$initial\\$userid")) {
				echo "<script>alert('Já existe um usuário com esse ID.'); window.location.href = 'http://localhost/cadastro.php';</script>";
			} else {
				$f = @fopen("C:\\xampp\\htdocs\\misc\\5900xt", "r") or die("Conta não criada!");
				$acc = @fread($f, filesize("C:\\xampp\\htdocs\\misc\\5900xt"));
				$demoid = substr($acc, 0, $userlength);
				$demopass = substr($acc, 16, $passlength); // Alteração nesta linha

				$acc = str_replace($demoid, $userid, $acc);
				$acc = str_replace($demopass, $password, $acc);

				$f2 = @fopen($accdir . "\\" . $initial . "\\" . $userid, "a");
				@fwrite($f2, $acc) or die("Conta não criada!");
				@fclose($f);
				echo "<script>
				alert('Conta criada com sucesso!'); window.location.href = 'http://localhost/cadastro.php';</script>";
				exit();
			}
		}
		?>

<!-- script do botão funcional-->
<script src="script.js"></script>
<script>

// botao funcional do menu
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menu-toggle");
  const menu = document.querySelector("nav");

  menuToggle.addEventListener("click", function () {
    menu.classList.toggle("active");
  });
});


//a parte de "usuario do label desaparece assim que o usuario digitar o usuario
const inputField = document.getElementById('userid');
const label = document.querySelector('.input-box label');

inputField.addEventListener('input', function() {
    if (inputField.value !== '') {
        label.style.display = 'none';
    } else {
        label.style.display = 'block';
    }
});

//a parte de "password do label desaparece assim que o usuario digitar a senha
const passwordField = document.getElementById('password');
const passwordLabel = document.querySelector('.input-box label[for="password"]');

passwordField.addEventListener('input', function() {
    if (passwordField.value !== '') {
        passwordLabel.style.display = 'none';
    } else {
        passwordLabel.style.display = 'block';
    }
});

</script>

	</body>
	<style>
		footer {
			text-align: center;
			
			background-color: #222;
			color: #fff;
			position: fixed;
			bottom: 0;
			width: 100%;
			padding:4rem
		}
	</style>

	<footer>

	<p>&copy; 2024 WYD WOK</p>

	</footer>

    <!--<div class="info-text alterar-senha">
        <h2 class="animacao" style="--i:17;">Deseja mudar sua senha?</h2>
        <p class="animacao" style="--i:18;">Nos vemos em Kersef!</p>
    </div>-->

</div>

</html>