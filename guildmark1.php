<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <script language="Javascript" type="text/javascript">
         document.oncontextmenu = function () { return false }
</script>
    <title>WYD-ZRO</title>

   
    <link href="_include/css/lostsurvivor-main.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="_include/js/lostsurvivor.js"></script>
    <script type="text/javascript" src="_include/js/lostsurvivor-min.js"></script>
    <link href="css/landing-page.css" rel="stylesheet">

	<script type='text/javascript'>
// C.2004 by CodeLifter.com
var nW,nH,oH,oW;
function zoomToggle(iWideSmall,iHighSmall,iWideLarge,iHighLarge,whichImage){
oW=whichImage.style.width;oH=whichImage.style.height;
if((oW==iWideLarge)||(oH==iHighLarge)){
nW=iWideSmall;nH=iHighSmall;}else{
nW=iWideLarge;nH=iHighLarge;}
whichImage.style.width=nW;whichImage.style.height=nH;
}
</script>
</head>

<body>
      <div class="container">
		<!--<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><center>Important</center></h3>
			</div>
			<div class="panel-body">
				<h4><center>Selecting a payment method you agree our <a href="http://forums.lostsurvivormmoz.com" target="_blank" >Terms of Service</center></a></p></h4>
			</div>
		</div>-->
	</div>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">A Imagem deve ser 16x12 formato BMP 24bits</h3>
			</div>
			<div class="panel-body">
			<style type="text/css">

</style>

<?php
error_reporting(0);


   $guildid = $_POST['guildid'];
   
   $img = "./img/guild/imgg/b0".(1000000+$guildid).".bmp";

   if (isset($_FILES['arquivo']['name']))
   {
       $uploaddir = '.\\img/guild/imgg\\';

       $arquivo = $uploaddir."b0".(1000000+$guildid).".bmp";

       $dimensao = getimagesize($_FILES['arquivo']['tmp_name']);
       if($_FILES['arquivo']["type"] == "image/bmp")
       {
           if(($dimensao[0] <= 16) && ($dimensao[1] <= 12))
           {
               if($_FILES['arquivo']["size"] <= 2000)
               {
                   if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo))
                   {
                       copy($arquivo,$uploaddir."b0".(1000000+$guildid).".bmp");
                       echo "O arquivo foi enviado com sucesso.<br>";
                       $img = "img/guild/imgg/b0".(1000000+$guildid).".bmp";
                   }
                   else
                   {
                       echo "[Error]: O arquivo não foi enviado.<br>";
                   }
               }
               else
               {
                   echo "[Error]: Imagem muito pesada.<br>";
               }
           }
           else
           {
               echo "[Error]: Imagem muito grande.<br>";
           }
       }
       else
       {
           echo "[Error]: Formato de imagem invalida.<br>";
       }
   }
?>	
<form method="post" enctype="multipart/form-data">

  <div style="margin-top: 2.2%; position: relative; width: 30%;"> 
        <div class="guildid">
         <input name="guildid"  style="padding: 12px; color:#CEB798; float: left; width: 100%; border: none; border-bottom: 1px solid black;" placeholder="Digite seu GUILD ID, para saber mais /guildindex" type="text" />
        </div>


        <!-- CONTROLES -->
		<style>
		  .bt-controls{
		    background-color: #CEB798;
		    border : 1px solid #CEB798;
		    color: white;
		  }
		  .bt-controls:hover{
		    background-color: #CEB798;
		    border : 1px solid black;
		    color: green;
		  }
		</style>
         <div class="controls" style="">
            <input class="bt-controls" style="border:none; margin-top: 2%; width: auto; float: left;" name="arquivo" type="file" />
            <input class="bt-controls" style="margin-top: 2%; float: right; width: auto;" type="submit" value="Confirmar" />
         </div>

         <!-- FIM CONTROLES -->
  </div>
</form> 
    <script type="text/javascript">
        var __lc = {};
        __lc.license = 5113441;

        (function () {
            var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
        })();
</script>
	</body>
</html>