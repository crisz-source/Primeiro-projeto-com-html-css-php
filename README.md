# Primeiro projeto

## Introdução 

Este foi meu primeiro projeto feito em html, css, java script e php. O intuito do projeto é sobre um jogo chamado WYD, um jogo bem antigo onde que no site você pode criar sua conta e iniciar a sua jornada. 

### Guia de instalação

Caso queira visualizar o site e ele funcionando vai precisar seguir os passos abaixo: 

1 - Instale o xampp no link: https://www.apachefriends.org/download.html

2 - Baixe os arquivo e pasta do projeto. 

3 - Crie uma pasta chamada account no C: ou até mesmo em algum outro lugar na sua máquina. 

4 - Crie outras pastas dentro de account com o nome maiúsculas, exemplo: A, B, C, D...

## Criando a pasta em outro diretório

1 - Criou a pasta account em outro diretório? Ótimo, será necessário realizar algumas modificação no código php no arquivo cadastro.php e alterarsenha.php

1.1 Utilize o separador "\\" no caminho do diretório, aqui irei criar a pasta account na pasta de downloads

```
		$accdir = "C:\\Users\\YourName\\Downloads\\account";
			$userid = trim($_POST['userid']);
			$password = trim($_POST['password']);
			$initial = substr($userid, 0, 1);
			$userlength = strlen($userid);
			$passlength = strlen($password);
```

1.2 - Faça o mesmo procedimento no arquivo alterarsenha.php

### Tecnologias usadas

![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)

### Perguntas frequentes 

1 - Por que criar uma pasta account? 

R: E uma regra no código php para que as contas criadas sejam direcionadas para essa pasta especificamente. 

2 - Por que criar pastas dentro de account?

R: Assim que cria uma conta com o login por exemplo, "aluisk" a regra é pegar o primeiro caractere e adicionar à uma pasta respectiva a inicial do login para que fique organizado as contas
