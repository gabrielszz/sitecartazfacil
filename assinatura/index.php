<?php

$qtd = 2;

$nome[0] = 'Gabriel Souza';
$cargo[0] = 'Analista de Sistema';
$empresa[0] = 'Cartaz Facil';


$email[0] = 'gabriel@scanprint.com';
$telefone[0] = '11 4010-0700 | 11 93251-0375';
$site[0] = 'www.cartazfacil.com.br';


//////////////////////////////////////////////////

$nome[1] = 'Nome Sobrenome';
$cargo[1] = 'Analista de Sistema';
$empresa[1] = 'Scanprint';


$email[1] = 'ramos@scanprint.com';
$telefone[1] = '11 2079-9702 | 11 98593-7956';
$site[1] = 'www.scandocs.com.br';

//////////////////////////////////////////////////




for($a = 0; $a < $qtd; $a++){ ?>
		<form action="index-2.php" method="post">
				<input type="hidden"  value="<?=$a;?>" name="cod">
				<input type="submit" value="<?=$empresa[$a];?>">
		</form>
<?php
}





?>
<br>
Copie e cole, e depois edite com sua informações.