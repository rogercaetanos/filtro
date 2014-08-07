<?php

// a frase abaixo deve ser buscada no banco de dados
$frase = "Eu tenho um cachorro, um gato, um rato, um pato e um periquito";

$dados = file("lista.txt"); 
$c = count($dados); 
//echo $c;
for ($i = $c-1; $i>= 0; $i--) {
	$verificar = @explode("|",$dados[$i]); 
	//if (eregi("($verificar[0])", "".trim($frase)."")){
     if (preg_match("/($verificar[0])/", "".trim($frase)."")){
		$cont = 0;
		$trocar = "";

		while($cont <= strlen($verificar[0])){
			$trocar .= "*";
			$cont ++;
		}
        //$frase = eregi_replace("$verificar[0]", "$trocar", $frase);
      $frase = preg_replace("/$verificar[0]/", "$trocar", $frase);			
	}

}

echo $frase;  
// a frase acima deve ser salva no banco de dados


/* O Código deve buscar no banco o conteúdo enviado pelo usuário restrito palavras indevidas predefinidas pelo adm em uma lista .txt e substituir por * no banco
echo $frase;*/
 ?>