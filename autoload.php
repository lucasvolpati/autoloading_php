<?php

//Arquivo de configuração do projeto contendo o autoloadind de classes.


function autoload($classe) { //A váriavel $classe recebe o nome da classe que está sendo chamada.

	$separator = DIRECTORY_SEPARATOR; //Barra ou Contra Barra (linux ou windows)

	$dirBase = __DIR__ . $separator; //Diretório base do projeto (pasta raíz) deve ser algo do tipo /var/www/html/projeto (linux) ou C:\\xampp\htdocs\projeto.
	
	//var_dump($dirBase);exit; //Comando para teste, mostra o caminho do diretório base.


	$classe = $dirBase . 'class' . $separator . str_replace('\\', $separator, $classe . ".php");

	//var_dump($classe);exit; //Comando para teste, mostra o caminho completo da localização da classe.
	
	if (file_exists($classe)) { //Verificação da existencia do arquivo.

		include($classe);
	}




}


spl_autoload_register('autoload'); //Método autoload que chama a função criada acima.


?>