<?php

$pessoa = $_POST['cod'];

//////////////////////////////////////////////////

$nome[0] = 'Nome Sobrenome';
$cargo[0] = 'Analista de Sistema';
$empresa[0] = 'Cartaz Facil';


$email[0] = 'gabriel@scanprint.com';
$telefone[0] = '11 4010-07000 | 11 93251-0375';
$site[0] = 'www.cartazfacil.com.br';


//////////////////////////////////////////////////

$nome[1] = 'Nome Sobrenome';
$cargo[1] = 'Analista de Sistema';
$empresa[1] = 'Scan Docs';


$email[1] = 'ramos@scanprint.com';
$telefone[1] = '11 4010-07000 | 11 93251-0375';
$site[1] = 'www.scandocs.com.br';

//////////////////////////////////////////////////

?>

<style type="text/css">
	@font-face{
		font-family: amertha;
   		src: url('http://192.241.140.92/novoWebsite/fonts/Amertha.ttf');
	}
	body{
		font-family: roboto, sans-serif;
	}
	.font-titulo{
		font-size: 20px;
		color: #525252;
		font-weight: bold;
		margin: 0px;
	}
	.font-info{
		color: #525252;
		font-size: 12px;
		font-weight: 400;
		margin: 0px;
	}
	p{
		    margin-block-start: 0.2em;
		    		    margin-block-end: 0.2em;

	}
	a{
		color: #525252;
		text-decoration: none;
	}

</style>


<table>
<tr><Td>

<?php if($empresa[$pessoa] == 'Cartaz Facil'){?>
<img src="logos-assinatura.png">
<?php }else{ ?>
<img src="logos-assinatura2.png">
<?php } ?>

</Td><td>
<p class="font-titulo" "><?=$nome[$pessoa];?></p>
<p class="font-info" style="margin-bottom: 16px;"><?=$cargo[$pessoa];?></p>
<p class="font-info"><?=$telefone[$pessoa];?></p>
<p class="font-info"><?=$email[$pessoa];?></p>
<p class="font-info"><a href="http://<?=$site[$pessoa];?>"><?=$site[$pessoa];?></a></p>
</td></tr></table>


