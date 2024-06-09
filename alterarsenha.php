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
	<title>Alterar Senha</title>


	
	<script type="text/javascript" src="_include/js/lostsurvivor.js"></script>
	<script type="text/javascript" src="_include/js/lostsurvivor-min.js"></script>
	

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
		
	
	</style>

</head>



	<body class="scroll-block">
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
<div class="main-cadastro">
		<div class="wrapper">
			<span class="cadastro-animacao"></span>
			<span class="cadastro-animacao2"></span>
				<div class="form-box criar-conta">
				
					<h1 class="animacao" style="--i:0;">Alterar Senha</h1>
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
					
					
					<div class="input-box animacao" style="--i:20;">
					<label for="newpass">Nova Senha:</label>
			<input type="password" id="newpass" name="newpass" maxlength="10">
			<span id="newpass-error"></span>
			  <i class='bx bxs-lock-alt'></i>
                </div>

					
						<input type="submit" name="submit" value="Alterar" class="btn animacao" style="--i:2;border: none;
    padding: 1rem;
    border-radius: 0.5rem;

     background: linear-gradient(#e0d209, #3e0253, #011727, #0ef );
		  
		" ></input>
					
				</div>
			
			<div class="info-text criar-conta">
				<h2 class="animacao" style="--i:0;">Deseja mudar sua senha?</h2>
				<p class="animacao" style="--i:1;">Nos vemos em Kersef!</p>
			</div>	
		</form>

		
		
		
		
		
		
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

//a parte de "password do label desaparece assim que o usuario digitar a nova-senha
const newPassField = document.getElementById('newpass');
const newPassLabel = document.querySelector('.input-box label[for="newpass"]');

newPassField.addEventListener('input', function() {
    if (newPassField.value !== '') {
        newPassLabel.style.display = 'none';
    } else {
        newPassLabel.style.display = 'block';
    }
});


</script>


<!--script do botão funcional no topo da tela-->
<script src="script.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
      const menuToggle = document.getElementById("menu-toggle");
      const menu = document.querySelector("nav");
    
      menuToggle.addEventListener("click", function () {
        menu.classList.toggle("active");
      });
    });
    </script>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</div>
	</div>
		
		
		
	
		<?php
		if (isset($_POST['submit'])) {
			$accdir = "C:\\account";
			$userid = trim($_POST['userid']);
			$password = trim($_POST['password']);
			$newpass = trim($_POST['newpass']);
			$initial = substr($userid, 0, 1);
			$userlength = strlen($userid);
			$passlength = strlen($password);
			$newpasslength = strlen($newpass);

			if (!preg_match("/^[0-9a-zA-Z]{4,12}$/", $userid)) {
				echo "<script>alert('Seu ID de usuário deve ter caracteres de a-z, A-Z, 0-9 e de 4 a 10 dígitos.'); window.location.href = 'http://localhost/alterarsenha.php';</script>";
				exit();
			}
			if (!preg_match("/^[0-9a-zA-Z]{4,12}$/", $password)) {
				echo "<script>alert('Sua senha atual deve ter caracteres de a-z, A-Z, 0-9 e de 4 a 10 dígitos.'); window.location.href = 'http://localhost/alterarsenha.php';</script>";
				exit();
			}
			if (!preg_match("/^[0-9a-zA-Z]{4,12}$/", $newpass)) {
				echo "<script>alert('Sua nova senha deve ter caracteres de a-z, A-Z, 0-9 e de 4 a 10 dígitos.'); window.location.href = 'http://localhost/alterarsenha.php';</script>";
				exit();
			}
			if (preg_match("/^[a-zA-Z]$/", $initial)) {
				$initial = strtoupper($initial);
			} else {
				$initial = "etc";
			}
			if (!file_exists("$accdir/$initial/$userid")) {
				echo "<script>alert('Não existe este usuário.'); window.location.href = 'http://localhost/alterarsenha.php';</script>";
			} else {
				$f = @fopen("$accdir/$initial/$userid", "r") or die("Falha ao alterar a senha!");
				$acc = @fread($f, filesize("$accdir/$initial/$userid"));
				$oldpass = substr($acc, 16, 16);
				$empty = substr($acc, 32, 15 - $newpasslength);
				if (strcmp(trim($oldpass), $password) == 0) {
					$acc = substr_replace($acc, $newpass, 16, $newpasslength);
					$acc = substr_replace($acc, $empty, 16 + $newpasslength, 15 - $newpasslength);
					$f2 = @fopen("$accdir/$initial/$userid", "w");
					@fwrite($f2, $acc) or die("Falha ao modificar a senha!");
					@fclose($f);
					echo "<script>alert('Senha alterada com sucesso!'); window.location.href = 'http://localhost/alterarsenha.php';</script>";
					exit();
				} else {
					echo "<script>alert('Senha atual incorreta.'); window.location.href = 'http://localhost/alterarsenha.php';</script>";
					exit();
				}
			}
		}
		?>

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

	</body>

	<style>
		footer {
			text-align: center;
			padding: 4rem;
			background-color: #222;
			color: #fff;
			position: fixed;
			bottom: 0;
			width: 100%;
		}
	</style>

	<footer>

	<p>&copy; 2024 WYD WOK</p>

	</footer>

</html>