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
	<title>WYD WOK</title>




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

	

	<!-- Scripts -->
	<script src="https://kit.fontawesome.com/6e9e880184.js" crossorigin="anonymous"></script>
	<script type='text/javascript'>
		// Se houver scripts adicionais, podem ser incluídos aqui
	</script>

	<!-- Inline CSS -->
	<style>
		/* Estilos específicos para esta página podem ser adicionados aqui */
	</style>
</head>

<head>
	<title>Criar Conta</title>
	<meta charset="UTF-8">
	<style>
		body {
			background-color: #f2f2f2;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
			color: #333;
		}

		form {
			width: 500px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
			text-align: center;
		}

		label {
			display: block;
			margin-bottom: 10px;
			color: #666;
			font-size: 18px;
			font-weight: bold;
			text-align: left;
		}

		input[type=text],
		input[type=password] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			font-size: 16px;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 18px;
			transition: background-color 0.3s ease;
		}

		input[type=submit]:hover {
			background-color: #3e8e41;
		}

		.bt-controls {
			background-color: #CEB798;
			border: 1px solid #CEB798;
			color: white;
		}

		.bt-controls:hover {
			background-color: #CEB798;
			border: 1px solid black;
			color: green;
		}

		

		body{
			background-color: #181012;
		}

		.header-topo-cor{
			background-color: #222;
		}

		a{
    text-decoration: none;
    color: #fff;

	
}





		
	</style>
</head>
<html>

<head>
	
	<title>Ranking de Jogadores</title>

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

<body>


<h1 style="margin-top: 100px;">Ranking de Jogadores</h1>

<!-- estilo da tabela -->
	<style>
		h1 {
			padding-bottom: 20px;
			color: #fff;
		}

		.navbar-default {
			background-color: #222;
			border-color: transparent;
			font-size: 18px;
			padding: 15px;


		}

		table {
			margin: 0 auto;
			border-collapse: collapse;
			width: 100%;
			max-width: 700px;
			font-family: Arial, sans-serif;

		}

		table,
		td,
		tr,
		th {
			border: 1px solid #fff;

		}

		.vertical td,
		.vertical-topo th {
			border: 1px solid #fff;
		}


		th,
		td {
			padding: 8px; /* Reduzindo o padding */
    white-space: nowrap; /* Evita que o texto quebre */
    font-size: 14px; /* Reduzindo o tamanho do texto */
	background-color: #222; /*muda a cor de fundo da tabela */
		}

		.nome-cell {
			text-align: right;
		}

		th,
		tr {
			text-align: center;
		}

		.nome-esq {
			text-align: left;
		}

		.button-container {
			text-align: center;
			margin-top: 20px;
			
		}

		.btn-voltar,
		.btn-num,
		.btn-prox {
			display: inline-block;
			padding: 8px 12px;
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

		.btn-voltar:hover,
		.btn-num:hover,
		.btn-prox:hover {

			color: #fff;


		}

		.cor-estendida{
    background-color: #181012;
}

		
	</style>
<!-- fim estilo da tabela -->


	<?php
	$filename = 'C:\\rank\Rank.txt';
	//$filename = 'C:\\WYD\\ZRO\\Release 7.59\\Common\\Ranking.txt';
	$linesPerPage = 10; // Número de linhas por página

	// Diretório das imagens
	$imagensDiretorio = '/diretorio/'; // Caminho relativo ao diretório "htdocs" do XAMPP


	if (file_exists($filename)) {
		$lines = file($filename);
		$tabela = array();

		foreach ($lines as $line) {
			$info = str_getcsv($line);
			$rank = $info[0];
			$nome = $info[1];
			$classe = $info[2];
			$level = (int)$info[4] + 1;
			$guildid = (int)$info[5];
			$reino = (int)$info[6];

			// Verifica se a classe é 'ARCH', 'CELESTIAL', 'SUBCELESTIAL', ou 'MORTAL'
			if (!in_array($classe, ['ARCH', 'CELESTIAL', 'SUBCELESTIAL', 'MORTAL'])) {
				continue;
			}

			// Verifica se já existe uma entrada para o mesmo nome
			$index = array_search($nome, array_column($tabela, 'nome'));
			if ($index !== false) {
				// Se a entrada existir, verifica se a nova classe vem antes na ordem
				if ($tabela[$index]['classe_order'] > getClasseOrder($classe)) {
					// Atualiza a entrada existente
					$personagem = $info[3];
					$imagem = $personagem . '.gif';
					$caminhoImagem = $imagensDiretorio . $imagem;

					$reino_imagem = '';

					if ($reino == 7) {
						$reino_imagem = $imagensDiretorio . 'blue.png';
					} elseif ($reino == 8) {
						$reino_imagem = $imagensDiretorio . 'red.png';
					}

					$tabela[$index] = array(
						'rank' => $rank,
						'nome' => $nome,
						'level' => $level,
						'classe' => $classe,
						'reino' => $reino,
						'reino_imagem' => $reino_imagem,
						'imagem' => $caminhoImagem,
						'classe_order' => getClasseOrder($classe)
					);
				}
			} 
			
			else {
				// Adiciona uma nova entrada se não existir
				$personagem = $info[3];
				$imagem = $personagem . '.gif';
				$caminhoImagem = $imagensDiretorio . $imagem;

				$reino_imagem = '';

				if ($reino == 7) {
					$reino_imagem = $imagensDiretorio . 'blue.png';
				} elseif ($reino == 8) {
					$reino_imagem = $imagensDiretorio . 'red.png';
				} else {
					$reino_imagem = $imagensDiretorio . 'white.png';
				}

				$tabela[] = array(
					'rank' => $rank,
					'nome' => $nome,
					'level' => $level,
					'classe' => $classe,
					'reino' => $reino,
					'reino_imagem' => $reino_imagem,
					'imagem' => $caminhoImagem,
					'classe_order' => getClasseOrder($classe),
					'guildid' => $guildid
				);
			}
		}

		usort($tabela, function ($a, $b) {
			// Ordena primeiro pela ordem da classe e, em seguida, pelo nível em ordem decrescente
			if ($a['classe_order'] == $b['classe_order']) {
				if ($a['level'] == $b['level']) {
					return $a['rank'] - $b['rank']; // Se os níveis forem iguais, ordena pelo rank
				}
				return $b['level'] - $a['level'];
			}
			return $a['classe_order'] - $b['classe_order'];
		});

		$i = 1;

		// Adiciona o número de rank baseado na ordem do array
		$i = 1;
		foreach ($tabela as &$data) {
			$data['rank'] = $i++;
		}
		unset($data); // Limpa a referência após o loop



		echo '</table>';
	} else {
		echo "<p>O arquivo de ranking não foi encontrado.</p>";
	}

	// ... (restante do seu código)

	$page = isset($_GET['page']) ? $_GET['page'] : 1; // Página atual
	$startIndex = ($page - 1) * $linesPerPage;
	$endIndex = $startIndex + $linesPerPage;
	$totalPages = ceil(count($tabela) / $linesPerPage);

	// Exibe a tabela com navegação
	echo '<table class="vertical">';
	echo '<tr class="vertical-topo"><th>Rank</th><th>Nome</th><th>Level</th><th>Classe</th><th>Reino</th><th>Imagem</th></tr>';

	for ($i = $startIndex; $i < $endIndex && $i < count($tabela); $i++) {
		$data = $tabela[$i];
		echo '<tr>';
		echo "<td>{$data['rank']}</td>";
		echo "<td class='nome-esq'>";

		// Adicione a coluna da Guilda apenas se o guildid for diferente de 0
		$guildid = isset($data['guildid']) ? (int)$data['guildid'] : 0;
		$imgguild = "/img/guild/imgg/b01" . str_pad($guildid, 6, '0', STR_PAD_LEFT) . ".bmp";
		if ($guildid !== 0) {
			echo "<img width='25px' src='{$imgguild}' alt='Guilda'>";
		}

		echo "{$data['nome']}</td>";
		echo "<td>{$data['level']}</td>";
		echo "<td>{$data['classe']}</td>";
		echo "<td>";

		if (!empty($data['reino_imagem'])) {
			echo "<img width='25px' src='{$data['reino_imagem']}' alt='{$data['reino']}'>";
		} else {
			echo "<img width='25px' src='{$data['reino_imagem']}' alt='{$data['reino']}'>";
		}

		echo "</td>";
		echo '<td>';

		if (file_exists($_SERVER['DOCUMENT_ROOT'] . $data['imagem'])) {
			echo "<img width='25px' src='{$data['imagem']}'>";
		} else {
			echo "Imagem não encontrada: {$data['imagem']}";
		}

		echo '</td>';
		echo '</tr>';
	}

	echo '</table>';
	
	// Botões de navegação
	if ($totalPages > 1) {
		echo "<div class='button-container'>";
		if ($page > 1) {
			$prevPage = $page - 1;
			echo "<a class='btn-voltar' href='?page={$prevPage}'>Voltar</a>";
		}

		for ($i = 1; $i <= $totalPages; $i++) {
			echo "<a class='btn-num' href='?page={$i}'>{$i}</a>";
		}

		if ($page < $totalPages) {
			$nextPage = $page + 1;
			echo "<a class='btn-prox' href='?page={$nextPage}'>Próxima</a>";
		}
		echo "</div>";
	}

	// Função para obter a ordem da classe
	function getClasseOrder($classe)
	{
		$ordem = [
			'ARCH' => 3,
			'CELESTIAL' => 2,
			'SUBCELESTIAL' => 1,
			'MORTAL' => 4
		];

		return $ordem[$classe] ?? 0;
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


<style>
 footer{

	position: fixed;
        bottom: 0;
        width: 100%;
        padding: 1rem 0;
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

	<p>&copy; 2024 WYD-WOK</p>

</footer>
<script type="text/javascript">
	setInterval(function() {
		location.reload();
	}, 3600000); // 3600000 milissegundos = 1 hora
</script>

<p class="frase" style="text-align: center; color: #fff; padding-top: 20px; font-size: 24px;">O ranking é atualizado a cada hora.</p>

</body>
</html>

